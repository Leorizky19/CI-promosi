<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
	
	
	public function index()
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//ambil data
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		//$data['banner_image'] = $this->db->get_where('banner_image')->result_array();
		
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/index',$data);
		$this->load->view('template/admin_footer',$data);
		}
		
		
	public function tambah()
		{
			//print_r($_POST);exit;
			$data = [
				'nama' => $this->input->post('nama'),
				'icon' => $this->input->post('icon'),
				'url' => $this->input->post('url')
				
				];
				// insert ke table admin_menu
				$this->db->insert('admin_menu', $data);
				
				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Menu Berhasil Ditambahkan!  </div>');
		redirect('admin_menu');
		
		
		}
	public function edit($id)

	{
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['admin_menu'] = $this->db->get_where('admin_menu', ['id' => $id])->row_array();
		
		$this->form_validation->set_rules('nama','Nama Menu','required|trim');
		$this->form_validation->set_rules('icon','Icon','required|trim');
		$this->form_validation->set_rules('url','Url','required|trim');
		
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
			$nama = $this->input->post('nama',true); 
			$icon = $this->input->post('icon',true);
			$url = $this->input->post('url',true);
		
		//
			$this->db->set('nama', $nama);
			$this->db->set('icon', $icon);
			$this->db->set('url', $url);
			$this->db->where('id',$this->input->post('id'));
			
				// update ke table admin_menu
				$this->db->update('admin_menu');

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Menu Berhasil DiUpdate!  </div>');
		redirect('admin_menu');
		
	}	
		
	}
	
	//fungsi hapus
	public function hapus($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
			// hapus ke table admin_menu
				$this->db->delete('admin_menu',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Menu Berhasil DiHapus!  </div>');
			redirect('admin_menu');
	
	}
	
	public function about()
	{
		$data['judul']= 'About';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['about'] = $this->db->get_where('about')->result_array();
		
		
		$this->form_validation->set_rules('motto','Motto','required|trim');
		$this->form_validation->set_rules('detail_bio','Detail_Bio','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/about',$data);
		$this->load->view('template/admin_footer',$data);
		
			}else{
		
			$data = [
				'motto' => $this->input->post('motto'),
				'detail_bio' => $this->input->post('detail_bio'),
				];
				// insert ke table admin_menu
				$this->db->insert('about', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/about');
		
		}	
	}
	public function about_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['about'] = $this->db->get_where('about', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('motto','Motto','required|trim');
		$this->form_validation->set_rules('detail_bio','Detail_Bio','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/about_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
			
			$motto = $this->input->post('motto',true);
			$detail_bio = $this->input->post('detail_bio',true);
		
		//
			
			$this->db->set('motto',$motto);
			$this->db->set('detail_bio',$detail_bio);
			
			$this->db->where('id',$this->input->post('id'));
			
			
				// update ke table admin_menu
			//	print_r($_POST);exit;
			
				$this->db->update('about');

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data About Berhasil DiUpdate!  </div>');
		redirect('admin_menu/about');
		
		}
	}
		public function hapus_about($id)
		{
			
			$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
			->row_array();
			
			
				// hapus ke table admin_menu
					$this->db->delete('about',['id' => $id]);
	
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
					Selamat, Data Berhasil DiHapus!  </div>');
				redirect('admin_menu/about/');
		
			}
	
			public function about_detail()
	{
		$data['judul']= 'About Detail';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['about_detail'] = $this->db->get_where('about_detail')->result_array();
		
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('text','text','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/about_detail',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/about-detail';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/about_detail');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$text = $this->input->post('text',true);
		}
		
			$data = [
				
				
				'judul' => $judul,
				'text' => $text,
				'image' => $gambar
				];
		
				// insert ke table admin_menu
				$this->db->insert('about_detail', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/about_detail');
		
		}	
	}
	public function about_detail_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['about_detail'] = $this->db->get_where('about_detail', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('text','Text','required|trim');
		

		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/about_detail_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
	}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/about-detail';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		//print_r($_FILES);exit;
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/about_detail');
			
		}else{
			$gambar = $this->upload->data();
			$gambar  = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$text = $this->input->post('text',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/about-detail/' .$gambar['file_name']);
		}
		
			$data = [
				'judul' => $judul,
				'text' => $text,
				'image' => $gambar
				];
				//	print_r($_POST);exit;
				$this->db->where('id',$this->input->post('id'));
			
				$this->db->update('about_detail', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/about_detail');
		
		}
	}
	public function hapus_about_detail($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('about_detail',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/about_detail/');
	
		}
	
		public function fitur()
	{
		$data['judul']= 'Fitur';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['fitur'] = $this->db->get_where('fitur')->result_array();
		
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('text','Text','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/fitur',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/fitur-img';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/fitur');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$text = $this->input->post('text',true);
		}
		
			$data = [
				'judul' => $judul,
				'text' => $text,
				'image' => $gambar
				];
		
				// insert ke table admin_menu
				$this->db->insert('fitur', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/fitur');
		
		}	
	}
	public function fitur_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['fitur'] = $this->db->get_where('fitur', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('text','Text','required|trim');
		

		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/fitur_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
	}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/fitur-img';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		//print_r($_FILES);exit;
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/fitur');
			
		}else{
			$gambar = $this->upload->data();
			$gambar  = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$text = $this->input->post('text',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/fitur-img/' .$gambar['file_name']);
		}
		
			$data = [
				'judul' => $judul,
				'text' => $text,
				'image' => $gambar
				];
				//	print_r($_POST);exit;
				$this->db->where('id',$this->input->post('id'));
			
				$this->db->update('fitur', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/fitur');
		
		}
	}
		public function hapus_fitur($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('fitur',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/fitur/');
	
		}
	

		public function banner_image()
	{
		$data['judul']= 'Banner image';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['banner_image'] = $this->db->get_where('banner_image')->result_array();
		
		$this->form_validation->set_rules('text','Text Bio','required|trim');
		$this->form_validation->set_rules('texts','Text Kecil','required|trim');
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/banner_image',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/banner';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/banner_image');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$text = $this->input->post('text',true);
			$texts = $this->input->post('texts',true);
		}
		
			$data = [
				'text' => $text,
				'texts' => $texts,
				'image' => $gambar
				];
				
				// insert ke table admin_menu
				$this->db->insert('banner_image', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/banner_image');
		
		}	
	}
		public function banner_image_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['banner_image'] = $this->db->get_where('banner_image', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('text','Text Bio','required|trim');
		$this->form_validation->set_rules('texts','Text Kecil','required|trim');
		

		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/banner_image_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
	}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/banner';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		//print_r($_FILES);exit;
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/banner_image');
			
		}else{
			$gambar = $this->upload->data();
			$gambar  = $gambar['file_name'];
			$text = $this->input->post('text',true);
			$texts = $this->input->post('texts',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/banner/' .$gambar['file_name']);
		}
		
			$data = [
				'text' => $text,
				'texts' => $texts,
				'image' => $gambar
				];
				//	print_r($_POST);exit;
				$this->db->where('id',$this->input->post('id'));
			
				$this->db->update('banner_image', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/banner_image');
		
		}
	}
	
		public function hapus_banner($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('banner_image',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/banner_image');
	
	}
	
	public function portofolio()
	{
		$data['judul']= 'Portofolio';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['portofolio'] = $this->db->get_where('portofolio')->result_array();
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('link','Link','required|trim');
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/portofolio',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/portofolio_baru';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/portofolio');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$link = $this->input->post('link',true);
		}
		
			$data = [
				'judul' => $judul,
				'link' => $link,
				'image' => $gambar
				];
				
				// insert ke table admin_menu
				$this->db->insert('portofolio', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/portofolio');
		
		}	

	}
	public function portofolio_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['portofolio'] = $this->db->get_where('portofolio', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('link','Link','required|trim');
		

		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/portofolio_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
	}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/portofolio_baru';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		//print_r($_FILES);exit;
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/portofolio');
			
		}else{
			$gambar = $this->upload->data();
			$gambar  = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$link = $this->input->post('link',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/portofolio_baru/' .$gambar['file_name']);
		}
		
			$data = [
				'judul' => $judul,
				'link' => $link,
				'image' => $gambar
				];
				//	print_r($_POST);exit;
				$this->db->where('id',$this->input->post('id'));
			
				$this->db->update('portofolio', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/portofolio');
		
		}
	}
	public function hapus_portofolio($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('portofolio',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/portofolio');
	
	}
	public function pricing()
	{
		$data['judul']= 'Pricing';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['pricing'] = $this->db->get_where('pricing')->result_array();
		
		$this->form_validation->set_rules('hd','Header','required|trim');
		$this->form_validation->set_rules('text1','Text','required|trim');
		$this->form_validation->set_rules('link','Text','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/pricing',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
			$data = [
				'hd' => $this->input->post('hd'),
				'text1' => $this->input->post('text1'),
				'link' => $this->input->post('link')
				];
				// insert ke table admin_menu
				$this->db->insert('pricing', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/pricing');
		
		}	
	}
	public function pricing_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['pricing'] = $this->db->get_where('pricing', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('hd','Hd','required|trim');
		$this->form_validation->set_rules('text1','text1','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/pricing_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
			
			$hd = $this->input->post('hd',true);
			$text1 = $this->input->post('text1',true);
			$link = $this->input->post('link',true);
		
		//
			
			$this->db->set('hd',$hd);
			$this->db->set('text1',$text1);
			$this->db->set('link',$link);
			
			$this->db->where('id',$this->input->post('id'));
			
			
				// update ke table admin_menu
			//	print_r($_POST);exit;
			
				$this->db->update('pricing');

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/pricing');
		
		}
	}
	public function hapus_pricing($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('pricing',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/pricing');
}
public function contact()
	{
		$data['judul']= 'Tulisan Bebas';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['contact'] = $this->db->get_where('contact')->result_array();
		
		$this->form_validation->set_rules('hd','Header','required|trim');
		$this->form_validation->set_rules('text1','Text','required|trim');
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/contact',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
			$data = [
				'hd' => $this->input->post('hd'),
				'text1' => $this->input->post('text1'),
				
				];
				// insert ke table admin_menu
				$this->db->insert('contact', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/contact');
		
		}	
	}
	public function contact_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['contact'] = $this->db->get_where('contact', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('hd','Hd','required|trim');
		$this->form_validation->set_rules('text1','text1','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/contact_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
			
			$hd = $this->input->post('hd',true);
			$text1 = $this->input->post('text1',true);
			
		
		//
			
			$this->db->set('hd',$hd);
			$this->db->set('text1',$text1);
			
			
			$this->db->where('id',$this->input->post('id'));
			
			
				// update ke table admin_menu
			//	print_r($_POST);exit;
			
				$this->db->update('contact');

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/contact');
		
		}
	}
	public function contact_hapus($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('contact',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/contact');
	}
	public function partner()
	{
		$data['judul']= 'Partner';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['partner'] = $this->db->get_where('partner')->result_array();
		
		$this->form_validation->set_rules('nama','Nama','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/partner',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/partner_logo';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/partner');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$nama = $this->input->post('nama',true);
			
		}
		
			$data = [
				'nama' => $nama,
				'image' => $gambar
				];
				// insert ke table admin_menu
				$this->db->insert('partner', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/partner');
		
		}
	}
	public function partner_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['partner'] = $this->db->get_where('partner', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('nama','Nama','required|trim');
		
		

		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/partner_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
	}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/partner_logo';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		//print_r($_FILES);exit;
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/partner');
		}else{
			$gambar = $this->upload->data();
			$gambar  = $gambar['file_name'];
			$nama = $this->input->post('nama',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/partner_logo/' .$gambar['file_name']);
		}
		
			$data = [
				'nama' => $nama,
				
				'image' => $gambar,
				];
				//	print_r($_POST);exit;
				$this->db->where('id',$this->input->post('id'));
			
				$this->db->update('partner', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/partner');
		
		}
	}
	public function hapus_partner($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('partner',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/partner');
	}		
		
	

	public function karyawan()
	{
		$data['judul']= 'Karyawan';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['karyawan'] = $this->db->get_where('karyawan')->result_array();
		
		$this->form_validation->set_rules('nm_kry','Nama','required|trim');
		$this->form_validation->set_rules('fb','Facebook','required|trim');
		$this->form_validation->set_rules('ig','Instagram','required|trim');
		$this->form_validation->set_rules('tw','Twitter','required|trim');
		$this->form_validation->set_rules('jbt','Jabatan','required|trim');
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/karyawan',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/karyawan';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/karyawan');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$nm_kry = $this->input->post('nm_kry',true);
			$fb = $this->input->post('fb',true);
			$ig = $this->input->post('ig',true);
			$tw = $this->input->post('tw',true);
			$jbt = $this->input->post('jbt',true);
			
		}
		
			$data = [
				'nm_kry' => $nm_kry,
				'fb' => $fb,
				'ig' => $ig,
				'tw' => $tw,
				'jbt' => $jbt,
				'image' => $gambar
				];
				
				// insert ke table admin_menu
				$this->db->insert('karyawan', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/karyawan');
		}
	}
	
	public function karyawan_edit($id)

	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		$data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])->row_array();
		
		
		$this->form_validation->set_rules('nm_kry','Nama','required|trim');
		$this->form_validation->set_rules('fb','Facebook','required|trim');
		$this->form_validation->set_rules('ig','Instagram','required|trim');
		$this->form_validation->set_rules('tw','Twitter','required|trim');
		$this->form_validation->set_rules('jbt','Jabatan','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/karyawan_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
	}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/karyawan';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		//print_r($_FILES);exit;
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/karyawan');
		}else{
			$gambar = $this->upload->data();
			$gambar  = $gambar['file_name'];
			$nm_kry = $this->input->post('nm_kry',true);
			$fb = $this->input->post('fb',true);
			$ig = $this->input->post('ig',true);
			$tw = $this->input->post('tw',true);
			$jbt = $this->input->post('jbt',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/partner_logo/' .$gambar['file_name']);
		}
		
			$data = [
				'nm_kry' => $nm_kry,
				'fb' => $fb,
				'ig' => $ig,
				'tw' => $tw,
				'jbt' => $jbt,
				'image' => $gambar
				];
				//	print_r($_POST);exit;
				$this->db->where('id',$this->input->post('id'));
			
				$this->db->update('karyawan', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/karyawan');
		
		}
	}
	public function hapus_karyawan($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('karyawan',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/karyawan');
	
	}	
	public function testimonial()
	{
		$data['judul']= 'Testimonial';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['testimonial'] = $this->db->get_where('testimonial')->result_array();
		
		
		$this->form_validation->set_rules('nama','nama','required|trim');
		$this->form_validation->set_rules('text','Text','required|trim');
		$this->form_validation->set_rules('jbt','Jabatan','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/testimonial',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/testimonial-img';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/testimonial');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$nama = $this->input->post('nama',true);
			$text = $this->input->post('text',true);
			$jbt = $this->input->post('jbt',true);
			
		}
		
			$data = [
				'nama' => $nama,
				'text' => $text,
				'jbt' => $jbt,
				'image' => $gambar
				];
				
				
				// insert ke table admin_menu
				$this->db->insert('testimonial', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/testimonial');
		
		}
	}
	public function testimonial_edit($id)
	{
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();

		$data['testimonial'] = $this->db->get_where('testimonial', ['id' => $id])->row_array();

		$this->form_validation->set_rules('nama','nama','required|trim');
		$this->form_validation->set_rules('text','Text','required|trim');
		$this->form_validation->set_rules('jbt','Jabatan','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/testimonial_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/testimonial-img';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/testimonial');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$nama = $this->input->post('nama',true);
			$text = $this->input->post('text',true);
			$jbt = $this->input->post('jbt',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/testimonial-img/' .$gambar['file_name']);
		}
		
			$data = [
				'nama' => $nama,
				'text' => $text,
				'jbt' => $jbt,
				'image' => $gambar
				];
		
				$this->db->where('id',$this->input->post('id'));
				// insert ke table admin_menu
				$this->db->update('testimonial', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah diUpdate!  </div>');
		redirect('admin_menu/testimonial');
		
		}
		
	}		
		public function hapus_testimonial($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('testimonial',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/testimonial');
	
		}	

public function contact_us()
{
	$data['judul']= 'Contact Us';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		
		$data['contact_us'] = $this->db->get_where('contact_us')->result_array();
		
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/contact_us',$data);
		$this->load->view('template/admin_footer',$data);
	
	}		
	public function hapus_contact_us($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('contact_us',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/contact_us');
	
	}	
public function footer()
	{
		$data['judul']= 'Footer';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['footer'] = $this->db->get_where('footer')->result_array();
		
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('fb','Facebook','required|trim');
		$this->form_validation->set_rules('ig','Instagram','required|trim');
		$this->form_validation->set_rules('tw','Twitter','required|trim');
		$this->form_validation->set_rules('yt','Youtube','required|trim');
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/footer',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/footer-logo';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/footer');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$fb = $this->input->post('fb',true);
			$ig = $this->input->post('ig',true);
			$tw = $this->input->post('tw',true);
			$yt = $this->input->post('yt',true);
			
		}
		
			$data = [
				'judul' => $judul,
				'fb' => $fb,
				'ig' => $ig,
				'tw' => $tw,
				'yt' => $yt,
				'image' => $gambar
				];
				
				// insert ke table admin_menu
				$this->db->insert('footer', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/footer');
		
		}
	}
	public function footer_edit($id)
	{
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		$data['footer'] = $this->db->get_where('footer', ['id' => $id])->row_array();

		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('fb','Facebook','required|trim');
		$this->form_validation->set_rules('ig','Instagram','required|trim');
		$this->form_validation->set_rules('tw','Twitter','required|trim');
		$this->form_validation->set_rules('yt','Youtube','required|trim');
		
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/footer_edit',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
		$config['upload_path'] = './front-end/assets/img/footer-logo';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 4048;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Maaf, Gambar Belum Diupload!  </div>');
		
			redirect('admin_menu/footer');
			
		}else{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$judul = $this->input->post('judul',true);
			$fb = $this->input->post('fb',true);
			$ig = $this->input->post('ig',true);
			$tw = $this->input->post('tw',true);
			$yt = $this->input->post('yt',true);
			$data =['gambar'=> $gambar['file_name']];
			unlink('front-end/assets/img/footer-logo/' .$gambar['file_name']);
			
		}
		
			$data = [
				'judul' => $judul,
				'fb' => $fb,
				'ig' => $ig,
				'tw' => $tw,
				'yt' => $yt,
				'image' => $gambar
				];
				
				$this->db->where('id',$this->input->post('id'));
				// insert ke table admin_menu
				$this->db->update('footer', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah diUpdate!  </div>');
		redirect('admin_menu/footer');
		
		}
	}
	public function hapus_footer($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('footer',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/footer');
	
	}	
	public function address()
	{
		$data['judul']= 'Address';
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		//query ambil tabel
		$data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
		$data['address'] = $this->db->get_where('address')->result_array();
		
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('telepon','Telepon','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/address',$data);
		$this->load->view('template/admin_footer',$data);
		
		
		}else{
		//print_r($_POST);exit;
		
			$data = [
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'telepon' => $this->input->post('telepon'),
				];
				// insert ke table admin_menu
				$this->db->insert('address', $data);

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data sudah ditambahkan!  </div>');
		redirect('admin_menu/address');
		
		}	
	}
	public function address_edit($id)
	{
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		$data['address'] = $this->db->get_where('address', ['id' => $id])->row_array();
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('telepon','Telepon','required|trim');
		
		if ($this->form_validation->run()== false){
			
		$this->load->view('template/admin_header',$data);
		//$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_topbar',$data);
		$this->load->view('admin_menu/address_edit',$data);
		$this->load->view('template/admin_footer',$data);
	}else{
		//print_r($_POST);exit;
			
			$alamat = $this->input->post('alamat',true);
			$email = $this->input->post('email',true);
			$telepon=$this->input->post('telepon',true);			
		
		//
			
			$this->db->set('alamat',$alamat);
			$this->db->set('email',$email);
			$this->db->set('telepon',$telepon);
			
			$this->db->where('id',$this->input->post('id'));
			
			
				// update ke table admin_menu
			//	print_r($_POST);exit;
			
				$this->db->update('address');

				$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		Selamat, Data Berhasil DiUpdate!  </div>');
		redirect('admin_menu/address');
		
		}
	}
	public function hapus_address($id)
	{
		
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])
		->row_array();
		
		
			// hapus ke table admin_menu
				$this->db->delete('address',['id' => $id]);

				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				Selamat, Data Berhasil DiHapus!  </div>');
			redirect('admin_menu/address');
		}
	}
