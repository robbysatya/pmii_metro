<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Gallery_kegiatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if (!$this->session->userdata('email')) {
			redirect('auth');
		  } else if ($this->session->userdata('role_id') == null) {
			redirect('auth');
		  }
	
		  $this->load->model('kategori_model');
		  $this->load->library('form_validation');
	}


	public function index()
	{
					
	}

	public function simpan(){
		$data['data_gallery'] = $this->db->get('tb_gallery');
		$this->gallery_model->simpan();
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		// redirect('dashboard/kategori');
	}
}
        
    /* End of file  Gallery_kegiatan.php */
        
                            