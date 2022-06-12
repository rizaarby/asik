<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{

		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("tabel_users", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/admin"));
		} else {
			$this->session->set_flashdata(
				'failed',
				'<div class="alert alert-danger" role="alert">
					Username atau password salah!
				</div>'
			);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}
