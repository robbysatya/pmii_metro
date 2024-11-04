<?php

class Auth_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  const SESSION_KEY = 'id_user';

  public function rules()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
  }

  public function login($email, $password)
  {
    $this->db->where('email', $email);

    $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

    // jika Usernya ada
    if ($user) {
      // jika User aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
		  $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('dashboard');
          } else {
            redirect('dashboard');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password salah!</div>');
          redirect('auth');
    	}
	} else {
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak aktif!</div>');
    	redirect('auth');
	}
	} else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
      redirect('auth');
    }

    // Membuat Session
    $this->session->set_userdata([self::SESSION_KEY => $user->id_user]);
    $this->_update_last_login($user->id_user);

    return $this->session->has_userdata(self::SESSION_KEY);
  }

  private function _update_last_login($id_user)
  {
    $data = [
      'last_login' => date("Y-m-d H:i:s"),
    ];

    $user = $this->db->update('tb_user', ['id_user' => $id_user]);
  }

  public function current_user()
  {
    if (!$this->session->has_userdata(self::SESSION_KEY)) {
      return null;
    }

    $id_user = $this->session->userdata(self::SESSION_KEY);
    $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
  }

  public function logout()
  {
    $this->session->unset_userdata(self::SESSION_KEY);
    return !$this->session->has_userdata(self::SESSION_KEY);
  }
}
