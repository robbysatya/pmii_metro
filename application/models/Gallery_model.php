<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

	public function index()
	{
		return $this->db->get_where('tb_kegiatan')->result();
	}

	public function simpan()
	{
		$time = new DateTime(date('H:i:s'));
		$date = $time->format('Ymd_His');

		$base64Gambar = $_FILES["foto_kegiatan"]["tmp_name"];
		$Path = "assets/images/kegiatan/";
		$ImagePath = $Path . $date . "_KegiatanPmiiMetro.png";
		move_uploaded_file($base64Gambar, $ImagePath);

		$post = [
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'tgl_kegiatan' => $this->input->post('tanggal_kegiatan'),
			'foto_kegiatan' => base_url() . $ImagePath
		];

		// var_dump($post);
		$this->db->insert('tb_kegiatan', $post);
	}
}
                        
/* End of file Gallery_model.php */
