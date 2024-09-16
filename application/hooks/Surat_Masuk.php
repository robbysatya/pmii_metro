<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_Masuk extends CI_Controller
{

	public function index()
	{
		$this->load->view('layout/header_admin');
		$this->load->view('layout/sidebar_menu');
		$this->load->view('layout/header_menu');
		$this->load->view('admin/surat_masuk');
		$this->load->view('layout/footer_admin');
	}
}