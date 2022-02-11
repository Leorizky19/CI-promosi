<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	
	}
	
	public function index ()
	
	{	
	
		$this->load->view('template/auth_header');
		$this->load->view('auth/login');
		$this->load->view('template/auth_footer');
	
	}

	function validasi ()
	
	{	
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');
		
		if($this->form_validation->run() == false){
			
			redirect('auth');
			}else{
			
			$email= $this->input->post('email');
			$password= $this->input->post('password');
		
			$user = $this->db->get_where('user',['email'=> $email])->row_array();
	
			if ($user){
				
				if (md5($password) == $user['password']){
					
					$data = [
					'email'=> $user ['email'],
					'as_id'=> $user['as_id'],
				
					];
					
					$this->session->set_userdata($data);
					
					if ($user['as_id']== 1){
					redirect('admin');
					
					}else{
						redirect('user/index');
					}
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-warning" 
			role="alert">
			Password Anda Salah</div>');
			redirect('auth');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-warning" 
			role="alert">
			Email salah, Anda belum mendaftar</div>');
			redirect('auth');
			
		}
	}
}

	public function registrasi ()
	
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password1','Password1','required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');
	
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/auth_header');
		$this->load->view('auth/registrasi');
		$this->load->view('template/auth_footer');
		
		}else{
			
			$data = [
			
			'nama'				=> $this->input->post('nama',true),
			'email'				=> $this->input->post('email',true),
			'password'			=> md5($this->input->post('password1')),
			'as_id'				=>2,
			'image'				=>'user.png',
			'date_created'		=>time()
			
			];
			
		$this->db->insert('user',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, anda sudah terdaftar! Silahkan Login!  </div>');
		redirect('auth');
		}
		
	}
	
	public function keluar()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('as_id');
		$this->session->set_flashdata('pesan','<div class="alert alert-info" role="alert">
		Anda sudah keluar! </div>');
		redirect('auth');
	}
}