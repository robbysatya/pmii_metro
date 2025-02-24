<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Kategori_model extends CI_Model {
                        
                        
public function simpan()
{
  $post = [
		'id_kategori' => $this->input->post('id_kategori'),
		'nama_kategori' => $this->input->post('nama_kategori'),
  ];
	var_dump($post);
  // return $this->db->insert('tb_kategori', $post);
}

                        
}
                        
/* End of file Kategori.php */
    
                        