<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
		public function index()
		{
			//query ambil tabel
		$data['banner_image'] = $this->db->get_where('banner_image')->result_array();
		$data['about'] = $this->db->get_where('about')->result_array();
		$data['fitur'] = $this->db->get_where('fitur')->result_array();
		$data['portofolio'] = $this->db->get_where('portofolio')->result_array();
		$data['pricing'] = $this->db->get_where('pricing')->result_array();
		$data['contact'] = $this->db->get_where('contact')->result_array();
		$data['partner'] = $this->db->get_where('partner')->result_array();
		$data['karyawan'] = $this->db->get_where('karyawan')->result_array();
		$data['footer'] = $this->db->get_where('footer')->result_array();
		$data['address'] = $this->db->get_where('address')->result_array();
			$this->load->view('template/home_header',$data);
			$this->load->view('template/home_navbar',$data);
			$this->load->view('home/index',$data);
			$this->load->view('template/home_footer',$data);
		}
		
		public function about()
		{
			$data['about_detail'] = $this->db->get_where('about_detail')->result_array();
			$data['partner'] = $this->db->get_where('partner')->result_array();
			$data['footer'] = $this->db->get_where('footer')->result_array();
			$data['address'] = $this->db->get_where('address')->result_array();
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/about', $data);
			$this->load->view('template/home_footer');
		}
		
		 public function portofolio()
		{
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/portofolio');
			$this->load->view('template/home_footer');
		}
		
		public function testimonials()
		{
			$data['footer'] = $this->db->get_where('footer')->result_array();
			$data['testimonial'] = $this->db->get_where('testimonial')->result_array();
			
			$data['address'] = $this->db->get_where('address')->result_array();
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/testimonials', $data);
			$this->load->view('template/home_footer',$data);
		}
		
		public function team()
		{
			$data['footer'] = $this->db->get_where('footer')->result_array();
			$data['karyawan'] = $this->db->get_where('karyawan')->result_array();
			$data['address'] = $this->db->get_where('address')->result_array();
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/team',$data);
			$this->load->view('template/home_footer',$data);
		}
		
		public function myAccount()
		{
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/myAccount');
			$this->load->view('template/home_footer');
		}
		
		public function signIn()
		{
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/signIn');
			$this->load->view('template/home_footer');
		}
		
		public function logIn()
		{
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/logIn');
			$this->load->view('template/home_footer');
		}
		
		public function blog()
		{
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/blog');
			$this->load->view('template/home_footer');
		}
		
				public function contact()
		{
		
		$data['footer'] = $this->db->get_where('footer')->result_array();
		$data['address'] = $this->db->get_where('address')->result_array();
		
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('telpon','Telpon','required|trim|trim');
		$this->form_validation->set_rules('subjek','subjek','required|trim|trim');
		$this->form_validation->set_rules('pesan','pesan','required|trim|trim');
		
		if ($this->form_validation->run()== false){
				
			$this->load->view('template/home_header');
			$this->load->view('template/home_navbar');
			$this->load->view('home/contact',$data);
			$this->load->view('template/home_footer',$data);
		
		}else{
			
			$data = [
			
			'nama'				=> $this->input->post('nama',true),
			'email'				=> $this->input->post('email',true),
			'telpon'			=> $this->input->post('telpon',true),
			'subjek'			=> $this->input->post('subjek',true),
			'pesan'				=> $this->input->post('pesan',true),
		
			
			];
			
		$this->db->insert('contact_us',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Pesan Anda Telah Dikirim!  </div>');
		redirect('home/contact');
		}
	}
}