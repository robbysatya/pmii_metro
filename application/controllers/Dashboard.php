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
	}

	public function index()
	{
		return $this->dashboard();
	}

	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$data['username'] = $this->session->userdata('email');
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/dashboard', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function anggota()
	{
		$data['title'] = 'Data Anggota';
		$data['data_anggota'] = $this->db->get('tb_anggota')->result_array();
		$data['username'] = $this->session->userdata('email');
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/anggota', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function alumni()
	{
		$data['title'] = 'Data Alumni';
		$data['data_alumni'] = $this->db->get('tb_alumni')->result_array();
		$data['username'] = $this->session->userdata('email');
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/alumni', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	public function berita()
	{
		$data['title'] = 'Daftar Berita';
		$data['data_berita'] = $this->db->get('tb_berita')->result_array();
		$data['username'] = $this->session->userdata('email');
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/berita', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}
}
