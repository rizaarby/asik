<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model1');
	}

	public function index()
	{

		$this->load->view('countdown');
	}



	public function about()
	{


		$this->load->view('about');
	}
	public function contact()
	{

		$this->load->view('contact');
	}
	public function panduan()
	{


		$this->load->view('panduan');
	}


	public function cari()
	{
		$data['list'] = $this->model1->get_view_settanggal();
		$this->load->view('search', $data);
	}

	public function hasil()
	{
		$data2['cari'] = $this->model1->cariOrang();
		$this->load->view('result', $data2);
	}



	function kirim_pesan()
	{
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$email = $this->input->post('email');
		$notelp = $this->input->post('notelp');

		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			array(
				'required' => 'Nama wajib diisi'
			)
		);
		$this->form_validation->set_rules(
			'pesan',
			'Pesan',
			'required',
			array(
				'required' => 'Pesan wajib diisi'
			)
		);

		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|valid_email',
			array(
				'required' => 'Email wajib diisi',
				'valid_email' => 'Email tidak valid'
			)
		);

		$this->form_validation->set_rules(
			'notelp',
			'No. Telepon',
			'required|min_length[12]|max_length[12]|numeric',
			array(
				'required' => 'Email wajib diisi',
				'min_length' => 'Minimal 12 angka',
				'max_length' => 'Maximal 12 angka',
				'numeric' => 'Hanya angka',
			)
		);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('contact');
		} else {
			$this->Model1->kirim_pesan($nama, $pesan, $email, $notelp);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success" role="alert">
					Pesan terkirim
				</div>'
			);
			redirect('Welcome/contact');
		}
	}
}
