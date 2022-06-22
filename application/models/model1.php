<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model1 extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function tampil_data()
	{
		$sql = "SELECT * FROM asik2022";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}

	public function cek($username, $password)
	{
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get("tabel_users");
	}



	function tambah_data($username, $password)
	{
		$data = array(
			'id' => '',
			'username' => $username,
			'password' => $password

		);
		$this->db->insert('tabel_users', $data);
	}

	function m_settanggal($settanggal)
	{
		$data = array(
			'id' => '',
			'settanggal' => $settanggal

		);
		$this->db->insert('tabel_settanggal', $data);
	}
	function kirim_pesan($nama, $pesan, $email, $notelp)
	{
		$data = array(
			'id' => '',
			'nama' => $nama,
			'pesan' => $pesan,
			'email' => $email,
			'notelp' => $notelp

		);
		$this->db->insert('tabel_pesan', $data);
	}
	function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tabel_users');
	}
	function hapus_pesan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tabel_pesan');
	}

	function hapus_settanggal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tabel_settanggal');
	}

	function hapus_data_siswa($no_ujian)
	{
		$this->db->where('no_ujian', $no_ujian);
		$delete = $this->db->delete('tabel_siswa');

		if ($delete) {
			$this->db->where('no_ujian', $no_ujian);
			$delete = $this->db->delete('tabel_nilai');
			return 1;
		} else {
			return 0;
		}
	}

	function getById($id)
	{
		return $this->db->get_where('tabel_users', array('id' => $id))->row();
	}
	function update($id)
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));




		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password


		);

		$this->db->where('id', $id);
		$this->db->update('tabel_users', $data);
	}

	// Update Data Siswa
	public function update_data_siswa($no_ujian, $data_siswa, $id_nilai, $data_nilai)
	{
		echo $no_ujian;
		$this->db->where('no_ujian', $no_ujian);
		$update_siswa = $this->db->update('tabel_siswa', $data_siswa);

		if ($update_siswa) {
			$this->db->where('id', $id_nilai);
			$this->db->where('no_ujian', $no_ujian);
			$this->db->update('tabel_nilai', $data_nilai);
			return 1;
		} else {
			return 0;
		};
	}

	public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * FROM tabel_siswa INNER JOIN tabel_nilai ON tabel_siswa.no_ujian=tabel_nilai.no_ujian where tabel_siswa.no_ujian = '$cari'");
		return $data->result();
	}

	function get_siswa_list($limit, $start)
	{
		$query = $this->db->get('asik2022', $limit, $start);
		return $query;
	}

	function get_pesan_list($limit, $start)
	{
		$query = $this->db->get('tabel_pesan', $limit, $start);
		return $query;
	}

	function get_view_users()
	{
		$query = $this->db->get('tabel_users');
		return $query;
	}

	function get_view_listdata()
	{
		$sql = "SELECT * FROM tabel_siswa INNER JOIN tabel_nilai on tabel_siswa.no_ujian = tabel_nilai.no_ujian";
		$tampil = $this->db->query($sql);
		return $tampil;
	}

	function get_view_listdata_detail($no_ujian)
	{
		$sql = "SELECT * FROM tabel_siswa LEFT JOIN tabel_nilai on tabel_nilai.no_ujian = tabel_siswa.no_ujian WHERE tabel_nilai.no_ujian = '$no_ujian'";
		$tampil = $this->db->query($sql)->row();
		return $tampil;
	}


	function get_view_settanggal()
	{
		$sql = "SELECT * FROM tabel_settanggal";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}

	function get_view_settanggal2()
	{
		$query = $this->db->get('tabel_settanggal');
		return $query;
	}


	// insert data siswa manual satu persatu
	public function insert_data_siswa($data)
	{
		$insert = $this->db->insert('tabel_siswa', $data);
		if ($insert) {
			return 1;
		} else {
			return 0;
		}
	}

	//insert nilai siswa manual satu persatu
	public function insert_nilai_siswa($data)
	{
		$insert = $this->db->insert('tabel_nilai', $data);
		if ($insert) {
			return 1;
		} else {
			return 0;
		}
	}

	// Mengambil seluruh daftar siswa
	public function get_siswa()
	{
		$query = $this->db->get('tabel_siswa');
		return $query->result();
	}

	// Mengambil daftar siswa yang belum dimasukkan nilainya

	public function get_siswa_belum_dinilai()
	{
		$query = $this->db->query("SELECT * FROM tabel_siswa WHERE no_ujian NOT IN ( SELECT no_ujian FROM tabel_nilai )");
		return $query->result();
	}

	// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
	public function insert_multiple($data)
	{
		$this->db->insert_batch('tabel_siswa', $data);
	}
	public function insert_multiple2($data)
	{
		$this->db->insert_batch('tabel_nilai', $data);
	}

	function push()
	{
		$this->db->truncate('tabel_siswa');
	}
	function push2()
	{
		$this->db->truncate('tabel_nilai');
	}
}
