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

	private function auth()
	{
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);


		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($this->form_validation->run() == false && $this->session) {
			$this->load->view('backend/login');
		} else if ($this->auth_model->login($email, $password)) {
			$this->auth_model->login();
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar!</div>');
		redirect('auth');
	}
}
