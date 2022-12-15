<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_guru');

}
    function index(){

        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');

        $data['guru'] = $this->M_guru->get_data('guru')->result();
		$this->load->view('guru/v_guru',$data);
		$this->load->view('template/footer');
}

 	function tambah(){
       
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
		$this->load->view('guru/v_tambah');	
        $this->load->view('template/footer');
    }

	function guru_tambah_aksi(){
		$nama_guru = $this->input->post('nama_guru');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$agama = $this->input->post('agama');
		$nip = $this->input->post('nip');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$data = array(
			'nama_guru' => $nama_guru,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'agama' => $agama,
			'nip' => $nip,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir);
			// insert data ke database
		$this->M_guru->insert_data($data,'guru');
			// mengalihkan halaman ke halaman data guru
		redirect(base_url().'index.php/guru');
}
	function edit_guru($id_guru){
		$this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
		$where = array('id_guru' => $id_guru);
		// mengambil data dari database sesuai id
		$data['guru'] = $this->M_guru->edit_data($where,'guru')->result();
		$this->load->view('guru/v_editguru',$data);
		$this->load->view('template/footer');
    }
	function update_guru(){
		$id_guru = $this->input->post('id_guru');
		$nama_guru = $this->input->post('nama_guru');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$nip = $this->input->post('nip');
		$data = array(
			'nama_guru' => $nama_guru,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'agama' => $agama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'nip' => $nip );
		$where = array(
			'id_guru' => $id_guru);
		$this->M_guru->update_data($where,$data,'guru');
		redirect('index.php/guru');
}
	function hapus_guru($id_guru){
		$where = array(
		'id_guru' => $id_guru);
	// menghapus data anggota dari database sesuai id_guru
		$this->M_guru->delete_data($where,'guru');
	// mengalihkan halaman ke halaman data anggota
		redirect(base_url().'index.php/guru');
}
}