<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
	}

	public function index()
	{
		$data['title'] = 'Berita';
		$this->load->view('frontend/layout/header', $data);
		$this->load->view('frontend/berita');
		$this->load->view('frontend/layout/footer');
	}	

	public function getBerita($id_berita){
		$data = $this->berita_model->getBeritabyID($id_berita);
		$url_title =  $data['tb_berita'][0]->judul_berita;
		$url_slug = url_title($url_title, 'dash', TRUE);
		redirect(base_url('berita/'.$id_berita.'/'.$url_slug));
	}

	public function detail_berita($id_berita){
		echo $id_berita;
	}
}
