<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_Kegiatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('email')) {
			redirect('auth');
		} else if ($this->session->userdata('role_id') == null) {
			redirect('auth');
		}

		$this->load->model('gallery_model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['data_kegiatan'] = $this->db->get('tb_kegiatan');
	}

	public function simpan()
	{
		$data['data_kegiatan'] = $this->db->get('tb_kegiatan');
		$this->gallery_model->simpan();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect('dashboard/gallery');
	}
}
        
    /* End of file  Gallery_Kegiatan.php */
