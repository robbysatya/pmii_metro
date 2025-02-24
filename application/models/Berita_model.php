<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Berita_model extends CI_Model {
                        
     
public function simpan(){

	$time = new DateTime(date('H:i:s'));
	$date = $time->format('Ymd_His');

	$base64Gambar = $_FILES["img_berita"]["tmp_name"];
	$Path = "assets/images/berita/";
    $ImagePath = $Path . $date ."_BeritaPmiiMetro.png";
    move_uploaded_file($base64Gambar, $ImagePath);

	$post = [
		'judul_berita' => $this->input->post('judul_berita'),
		'isi' => $this->input->post('isi'),
		'img_berita' => base_url() . $ImagePath,
		'id_kategori' => implode($this->input->post('id_kategori')),  
		'slug' => $this->input->post('slug'),
		'tanggal_berita' => $this->input->post('tanggal_berita'),
		'status' => $this->input->post('status'),
	];
	
	// var_dump($post);
	$this->db->insert('tb_berita', $post);
}

public function getBeritabyID($id_berita){
	return $this->db->get_where('tb_berita', ['id_berita' => $id_berita])->result();
}
                        
}
                        
/* End of file Berita_model.php */                        
