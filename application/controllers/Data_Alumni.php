<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Alumni extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('alumni_model');
	  $this->load->library('form_validation');
	}

	public function simpan()
	{
	  	$data['data_alumni'] = $this->db->get('tb_alumni')->result_array();
  		$this->alumni_model->simpan();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect('dashboard/alumni');
	  }
	}
