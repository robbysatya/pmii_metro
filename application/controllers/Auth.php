<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->auth();
	}

	public function auth()
	{
		$this->load->view('backend/login');
	}
}
