<?php

class Alumni_model extends CI_Model
{

public function rules()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    $this->form_validation->set_rules('komisariat', 'Komisariat', 'trim|required');
  }
// FUNGSI MODEL SIMPAN
  public function simpan()
  {
    $post = [
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'periode' => $this->input->post('periode'),
    ];
    return $this->db->insert('tb_alumni', $post);
  }
}
