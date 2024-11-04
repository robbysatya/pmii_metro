<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['data_berita'] = $this->db->get('tb_berita')->result_array();
	}
	
	public function tambah_berita()
	{
		$data['title'] = 'Tambah Berita';
		$data['data_berita'] = $this->db->get('tb_berita')->result_array();
		$this->load->view('backend/dashboard/layout/header', $data);
		$this->load->view('backend/dashboard/layout/sidebar', $data);
		$this->load->view('backend/dashboard/tambah_berita', $data);
		$this->load->view('backend/dashboard/layout/footer');
	}

	
}
