<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
	function __construct(){
		parent::__construct();
	$this->load->model('m_siswa');
$this->load->helper('url');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['siswa'] = $this->m_siswa->get_data('siswa')->result();
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
       
        
		$this->load->view('siswa/v_siswa',$data);
        $this->load->view('template/footer');
	}
	
	function tambah_siswa(){
		$this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
		$this->load->view('siswa/v_tambah_siswa');
		$this->load->view('template/footer');
		}
	function siswa_tambah_aksi(){
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat_siswa = $this->input->post('alamat_siswa');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$anak_ke = $this->input->post('anak_ke');
		$agama = $this->input->post('agama');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$no_ijazah = $this->input->post('no_ijazah');
		$tahun_ijazah = $this->input->post('tahun_ijazah');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$no_hp_siswa = $this->input->post('no_hp_siswa');
		$nama_ibu = $this->input->post('nama_ibu');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$nama_ayah = $this->input->post('nama_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$alamat_orang_tua = $this->input->post('alamat_orang_tua');
			$data = array(
				'nis' => $nis,
				'nisn' => $nisn,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat_siswa' => $alamat_siswa,
				'tmpt_lahir' => $tmpt_lahir,
				'tgl_lahir' => $tgl_lahir,
				'anak_ke' => $anak_ke,
				'agama' => $agama,
				'asal_sekolah' => $asal_sekolah,
				'no_ijazah' => $no_ijazah,
				'tahun_ijazah' => $tahun_ijazah,
				'tgl_masuk' => $tgl_masuk,
				'no_hp_siswa' => $no_hp_siswa,
				'nama_ibu' => $nama_ibu,
				'pekerjaan_ibu' => $pekerjaan_ibu,
				'nama_ayah' => $nama_ayah,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'alamat_orang_tua' => $alamat_orang_tua
				);
				$this->m_siswa->insert_data($data,'siswa');
				redirect('index.php/siswa');
				}      
	function edit_siswa($id_siswa){
		$where = array('id_siswa' => $id_siswa);
		// mengambil data dari database sesuai id_siswa
		$data['siswa'] = $this->m_siswa->edit_data($where,'siswa')->result();
		$this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
		$this->load->view('siswa/v_edit_siswa',$data);
		$this->load->view('template/footer');
		}
	function siswa_update(){
		$id_siswa = $this->input->post('id_siswa');
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');
		$alamat_siswa = $this->input->post('alamat_siswa');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$anak_ke = $this->input->post('anak_ke');
		$agama = $this->input->post('agama');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$no_ijazah = $this->input->post('no_ijazah');
		$tahun_ijazah = $this->input->post('tahun_ijazah');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$no_hp_siswa = $this->input->post('no_hp_siswa');
		$nama_ibu = $this->input->post('nama_ibu');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$nama_ayah = $this->input->post('nama_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$alamat_orang_tua = $this->input->post('alamat_orang_tua');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
			$data = array(
				'nis' => $nis,
				'nisn' => $nisn,
				'nama' => $nama,
				'alamat_siswa' => $alamat_siswa,
				'tmpt_lahir' => $tmpt_lahir,
				'tgl_lahir' => $tgl_lahir,
				'anak_ke' => $anak_ke,
				'agama' => $agama,
				'asal_sekolah' => $asal_sekolah,
				'no_ijazah' => $no_ijazah,
				'tahun_ijazah' => $tahun_ijazah,
				'tgl_masuk' => $tgl_masuk,
				'no_hp_siswa' => $no_hp_siswa,
				'nama_ibu' => $nama_ibu,
				'pekerjaan_ibu' => $pekerjaan_ibu,
				'nama_ayah' => $nama_ayah,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat_orang_tua' => $alamat_orang_tua
				);
					$where = array(
						'id_siswa' => $id_siswa
						);
					$this->m_siswa->update_data($where,$data,'siswa');
					redirect('index.php/siswa');
					}    
					function hapus_siswa($id_siswa){
						$where = array(
						'id_siswa' => $id_siswa
						);
						// menghapus data buku dari database sesuai id
						$this->m_siswa->delete_data($where,'siswa');
						// mengalihkan halaman ke halaman data buku
						redirect(base_url().'index.php/siswa');
						}
}
