<?php

class Admin extends CI_Controller
{
	private $filename = "import_data";

	function __construct()
	{
		parent::__construct();
		$this->load->model('model1');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login"));
		}
	}

	public function index()
	{
		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('v_admin');
		$this->load->view('template/footer.php');
	}
	function list_data()
	{

		$data['data'] = $this->model1->get_view_listdata();
		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('list_data', $data);
		$this->load->view('template/footer.php');
	}
	public function tambah()
	{
		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('tambah_user');
		$this->load->view('template/footer.php');
	}

	public function tambah_settanggal()
	{
		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('settanggal');
		$this->load->view('template/footer.php');
	}
	public function view_pesan()
	{

		$config['base_url'] = site_url('admin/view_pesan');
		$config['total_rows'] = $this->db->count_all('tabel_pesan');
		$config['per_page'] = 3;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		//config for bootstrap pagination class integration
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';

		//$config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';

		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['data'] = $this->model1->get_pesan_list($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();

		$users = $this->db->get('tabel_pesan');

		$data['row'] = $users->num_rows();

		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('pesan', $data);
		$this->load->view('template/footer.php');
	}

	public function view_user()
	{

		$users = $this->db->get('tabel_users');

		$data['row'] = $users->num_rows();
		$data['data'] = $this->model1->get_view_users();

		$this->load->view('v_user', $data);
	}

	public function view_settanggal()
	{

		$data['data'] = $this->model1->get_view_settanggal2();

		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('v_settanggal', $data);
		$this->load->view('template/footer.php');
	}

	function tambah_user()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->Model1->tambah_data($username, $password);
		redirect('admin/view_user');
	}

	function settanggal()
	{
		$settanggal = $this->input->post('settanggal');
		$this->Model1->m_settanggal($settanggal);
		redirect('admin/view_settanggal');
	}

	public function hapus_data($id)
	{
		$this->model1->hapus($id);
		redirect('admin/list_data');
	}
	public function hapus_pesan($id)
	{
		$this->model1->hapus_pesan($id);
		redirect('admin/view_pesan');
	}
	public function hapus_settanggal($id)
	{
		$this->model1->hapus_settanggal($id);
		redirect('admin/view_settanggal');
	}

	public function hapus_data_siswa($no_ujian)
	{
		$this->model1->hapus_data_siswa($no_ujian);
		redirect('admin/list_data');
	}

	function ubah_data($id)
	{
		if ($this->input->post('submit')) {
			$this->model1->update($id);
			redirect('admin/view_user');
		}
		$data['hasil'] = $this->model1->getById($id);

		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('v_update_data', $data);
		$this->load->view('template/footer.php');
	}

	function get_data_siswa_dan_nilai($no_ujian)
	{
		$data['data'] = $this->model1->get_view_listdata_detail($no_ujian);

		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('v_update_data_siswa_dan_nilai', $data);
		$this->load->view('template/footer.php');
	}

	function update_data_siswa_dan_nilai()
	{
		$no_ujian = $this->input->post('no_ujian');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('nama');
		$id_nilai = $this->input->post('id');
		$bi = $this->input->post('bi');
		$mat = $this->input->post('mat');
		$bing = $this->input->post('bing');
		$kejuruan = $this->input->post('kejuruan');

		$data_siswa = array(
			'nama' => $nama,
			'jurusan' => $jurusan
		);

		$data_nilai = array(
			'bi' => $bi,
			'mat' => $mat,
			'bing' => $bing,
			'kejuruan' => $kejuruan,
		);

		$this->model1->update_data_siswa($no_ujian, $data_siswa, $id_nilai, $data_nilai);
		redirect('admin/list_data');
	}

	public function tambah_siswa()
	{
		$no_ujian = $this->input->post('no_ujian');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$this->form_validation->set_rules(
			'no_ujian',
			'Nomor Ujian',
			'required|is_unique[tabel_siswa.no_ujian]',
			array(
				'required' => 'No. Ujian wajib diisi',
				'is_unique' => 'No. Ujian tidak boleh sama'
			)
		);
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			array(
				'required' => 'Nama wajib diisi'
			)
		);
		$this->form_validation->set_rules(
			'jurusan',
			'Jurusan',
			'required',
			array(
				'required' => 'Jurusan wajib diisi'
			)
		);

		if ($this->form_validation->run() == FALSE) {
			$data['siswa'] = $this->model1->get_siswa();

			$this->load->view('template/head.php');
			$this->load->view('template/nav.php');
			$this->load->view('i_siswa', $data);
			$this->load->view('template/footer.php');
		} else {
			$data = array(
				'no_ujian' => $no_ujian,
				'nama' => $nama,
				'jurusan' => $jurusan
			);

			$inserted = $this->model1->insert_data_siswa($data);
			if ($inserted) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success" role="alert">
				Data siswa berhasil ditambahkan
			</div>'
				);
			}
			redirect('admin/form_siswa');
		}
	}

	public function input_nilai()
	{
		$no_ujian = $this->input->post('no_ujian');
		$bi = $this->input->post('bi');
		$mat = $this->input->post('mat');
		$bing = $this->input->post('bing');
		$kejuruan = $this->input->post('kejuruan');

		$this->form_validation->set_rules(
			'no_ujian',
			'Siswa',
			'required',
			array(
				'required' => 'Silahkan pilih siswa!'
			)
		);

		$this->form_validation->set_rules(
			'bi',
			'Nilai Bahasa Indonesia',
			'required',
			array(
				'required' => 'Nilai Bahasa Indonesia wajib diisi!'
			)
		);

		$this->form_validation->set_rules(
			'mat',
			'Nilai Matematika',
			'required',
			array(
				'required' => 'Nilai Matematika wajib diisi!'
			)
		);

		$this->form_validation->set_rules(
			'bing',
			'Nilai Bahasa Inggris',
			'required',
			array(
				'required' => 'Nilai Bahasa Inggris wajib diisi!'
			)
		);

		$this->form_validation->set_rules(
			'kejuruan',
			'Nilai Kejuruan',
			'required',
			array(
				'required' => 'Nilai Kejuruan wajib diisi!'
			)
		);

		if ($this->form_validation->run() == FALSE) {
			$data['siswa'] = $this->model1->get_siswa_belum_dinilai();

			$this->load->view('template/head.php');
			$this->load->view('template/nav.php');
			$this->load->view('i_nilai', $data);
			$this->load->view('template/footer.php');
		} else {
			$data = array(
				'no_ujian' => $no_ujian,
				'bi' => $bi,
				'mat' => $mat,
				'bing' => $bing,
				'kejuruan' => $kejuruan
			);

			$inserted = $this->model1->insert_nilai_siswa($data);
			if ($inserted) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success" role="alert">
				Nilai berhasil ditambahkan!
			</div>'
				);
			}

			redirect('admin/form_nilai');
		}
	}

	public function form_siswa()
	{

		$data['siswa'] = $this->model1->get_siswa();

		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('i_siswa', $data);
		$this->load->view('template/footer.php');
	}

	public function form_nilai()
	{

		$data['siswa'] = $this->model1->get_siswa_belum_dinilai();

		$this->load->view('template/head.php');
		$this->load->view('template/nav.php');
		$this->load->view('i_nilai', $data);
		$this->load->view('template/footer.php');
	}

	function truncate()
	{

		$this->model1->push();
		redirect('admin/v_user');
	}

	function truncate2()
	{

		$this->model1->push2();
		redirect('admin/v_user');
	}
}
