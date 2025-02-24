<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Anggota extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();

	  if (!$this->session->userdata('email')) {
		redirect('auth');
	  } else if ($this->session->userdata('role_id') == null) {
		redirect('auth');
	  }

	  $this->load->model('anggota_model');
	  $this->load->library('form_validation');
	}

	public function simpan()
	{
	  	$data['data_anggota'] = $this->db->get('tb_anggota')->result_array();
  		$this->anggota_model->simpan();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect('dashboard/anggota');
	  }
	}
