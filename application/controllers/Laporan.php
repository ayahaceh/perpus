<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		$this->data['CI'] = &get_instance();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Admin');
		$this->load->library(array('cart'));
		if ($this->session->userdata('masuk_sistem_rekam') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	public function index()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');

		$this->data['nama_lap'] = 'Laporan Buku Tersedia';
		$this->data['perpus'] =  $this->db->query("SELECT * FROM tbl_perpus LIMIT 1")->row();
		$this->data['buku'] =  $this->db->query("SELECT * FROM tbl_buku ORDER BY id_buku ASC");

		$this->load->view('laporan/lap_buku_tersedia', $this->data);
	}

	public function dipinjam()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');

		$this->data['nama_lap'] = 'Laporan Buku Sedang Dipinjam Anggota';
		$this->data['perpus'] =  $this->db->query("SELECT * FROM tbl_perpus LIMIT 1")->row();
		$this->data['buku'] =  $this->db->query("SELECT * FROM `tbl_pinjam` JOIN `tbl_login` ON tbl_pinjam.anggota_id = tbl_login.anggota_id JOIN tbl_buku ON tbl_pinjam.buku_id = tbl_buku.buku_id WHERE status='Dipinjam' ORDER BY tbl_pinjam.anggota_id ASC");

		$this->load->view('laporan/lap_buku_dipinjam', $this->data);
	}

	public function buku_baru_pilih()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->data['buku'] =  $this->db->query("SELECT * FROM tbl_buku ORDER BY id_buku DESC");
		$this->data['title_web'] = 'Laporan Buku Baru';
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('laporan/config_buku', $this->data);
		$this->load->view('footer_view', $this->data);
	}

	public function buku_baru_hasil()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->data['nama_lap'] = 'Laporan Buku Masuk';
		$this->data['perpus'] =  $this->db->query("SELECT * FROM tbl_perpus LIMIT 1")->row();

		$tgl_start 	= $this->input->post('tgl_start');
		$tgl_end 	= $this->input->post('tgl_end');
		$q = "SELECT * FROM tbl_buku WHERE tgl_masuk BETWEEN '" . $tgl_start . "' AND '" . $tgl_end . "' ORDER BY tgl_masuk ASC";
		$this->data['buku'] 		=  $this->db->query($q);
		$this->data['tgl_start'] 	= $tgl_start;
		$this->data['tgl_end'] 		= $tgl_end;

		$this->load->view('laporan/lap_buku_baru', $this->data);
	}

	public function pinjam_baru_pilih()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->data['buku'] =  $this->db->query("SELECT * FROM tbl_buku ORDER BY id_buku DESC");
		$this->data['title_web'] = 'Laporan Buku Dipinjam';
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('laporan/config_pinjam', $this->data);
		$this->load->view('footer_view', $this->data);
	}

	public function pinjam_baru_hasil()
	{
		$this->data['idbo'] 	= $this->session->userdata('ses_id');
		$this->data['nama_lap'] = 'Laporan Buku Dipinjam';
		$this->data['perpus'] 	=  $this->db->query("SELECT * FROM tbl_perpus LIMIT 1")->row();

		$tgl_start 	= $this->input->post('tgl_start');
		$tgl_end 	= $this->input->post('tgl_end');
		$this->data['buku'] =  $this->db->query("SELECT * FROM `tbl_pinjam` JOIN `tbl_login` ON tbl_pinjam.anggota_id = tbl_login.anggota_id JOIN tbl_buku ON tbl_pinjam.buku_id = tbl_buku.buku_id WHERE status='Dipinjam' AND tgl_pinjam BETWEEN '" . $tgl_start . "' AND '" . $tgl_end . "' ORDER BY tgl_pinjam ASC");

		// $q = "SELECT * FROM tbl_buku WHERE tgl_masuk BETWEEN '" . $tgl_start . "' AND '" . $tgl_end . "' ORDER BY tgl_masuk ASC";
		// $this->data['buku'] 		=  $this->db->query($q);
		$this->data['tgl_start'] 	= $tgl_start;
		$this->data['tgl_end'] 		= $tgl_end;

		$this->load->view('laporan/lap_buku_pinjam', $this->data);
	}



	// ---
}
