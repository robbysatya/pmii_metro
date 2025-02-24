<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		  if (!$this->session->userdata('email')) {
			redirect('auth');
		  } else if ($this->session->userdata('role_id') == null) {
			redirect('auth');
		  } else if ($this->session->userdata('role_id') != '1') {
			redirect('auth/blocked');
		  } 

		$this->load->helper(array('url','html','form')); 

		$this->load->model('berita_model');
	  	$this->load->library('form_validation');
	}

	public function index()
	{
		return $this->dashboard();
	}

	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/dashboard', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function anggota()
	{
		$data['title'] = 'Data Anggota';
		$data['data_anggota'] = $this->db->get('tb_anggota')->result_array();
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/anggota', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function alumni()
	{
		$data['title'] = 'Data Alumni';
		$data['data_alumni'] = $this->db->get('tb_alumni')->result_array();
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/alumni', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function berita()
	{
		$data['title'] = 'Daftar Berita';
		$data['data_berita'] = $this->db->get('tb_berita')->result_array();
		$data['data_kategori'] = $this->db->get('tb_kategori')->result_array();
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/berita', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function tambah_berita()
	{
		$data['title'] = 'Tambah Berita';
		$data['username'] = $this->session->userdata('email');
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$data['data_kategori'] = $this->db->get('tb_kategori')->result_array();
		$data['data_berita'] = $this->db->get('tb_berita')->result_array();
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/tambah_berita', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function simpan_berita()
	{
  		$this->berita_model->simpan();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect('dashboard/berita');
	}
	
	public function kategori(){
		$data['title'] = 'Daftar Kategori';
		$data['data_kategori'] = $this->db->get('tb_kategori')->result_array();
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/kategori', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function gallery(){
		$data['title'] = 'Gallery Kegiatan';
		$get_datases = $this->db->get_where('tb_user', ['email' => $_SESSION['email']])->result_array();
		$data['userdata'] = $get_datases['0']['name'];
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/gallery_kegiatan', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}
}
