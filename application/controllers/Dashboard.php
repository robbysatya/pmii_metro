<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->dashboard();
	}

	public function dashboard()
	{
		$this->load->view('backend/dashboard/layout/header');
		$this->load->view('backend/dashboard/layout/sidebar');
		$this->load->view('backend/dashboard/dashboard');
		$this->load->view('backend/dashboard/layout/footer');
	}
}
