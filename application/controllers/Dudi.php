<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dudi extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_dudi');

}
    function index(){

        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');

        $data['dudi'] = $this->M_dudi->get_data('dudi')->result();
		$this->load->view('dudi/v_dudi',$data);
		$this->load->view('template/footer');
}

function tambah(){
       
    $this->load->view('template/header');
    $this->load->view('template/wrapper');
    $this->load->view('template/navbar');
    $this->load->view('dudi/v_tambah');	
    $this->load->view('template/footer');
}

function dudi_tambah_aksi(){
    $nama_dudi = $this->input->post('nama_dudi');
    $alamat_dudi = $this->input->post('alamat_dudi');
    $nama_pembimbing = $this->input->post('nama_pembimbing');
    $no_hp = $this->input->post('no_hp');
    $tgl_masuk = $this->input->post('tgl_masuk');
    $tgl_keluar = $this->input->post('tgl_keluar');
    $data = array(
        'nama_dudi' => $nama_dudi,
        'alamat_dudi' => $alamat_dudi,
        'nama_pembimbing' => $nama_pembimbing,
        'no_hp' => $no_hp,
        'tgl_masuk' => $tgl_masuk,
        'tgl_keluar' => $tgl_keluar);
        // insert data ke database
    $this->M_dudi->insert_data($data,'dudi');
        // mengalihkan halaman ke halaman data dudi
    redirect(base_url().'index.php/dudi');
}
function edit_dudi($id){
    $this->load->view('template/header');
    $this->load->view('template/wrapper');
    $this->load->view('template/navbar');
    $where = array('id' => $id);
    // mengambil data dari database sesuai id
    $data['dudi'] = $this->M_dudi->edit_data($where,'dudi')->result();
    $this->load->view('dudi/v_editdudi',$data);
    $this->load->view('template/footer');
}
function update_dudi(){
    $id = $this->input->post('id');
    $nama_dudi = $this->input->post('nama_dudi');
    $nama_pembimbing = $this->input->post('nama_pembimbing');
    $alamat_dudi = $this->input->post('alamat_dudi');
    $no_hp = $this->input->post('no_hp');
    $tgl_masuk = $this->input->post('tgl_masuk');
    $tgl_keluar = $this->input->post('tgl_keluar');
    $data = array(
        'id' => $id,
        'nama_dudi' => $nama_dudi,
        'nama_pembimbing' => $nama_pembimbing,
        'alamat_dudi' => $alamat_dudi,
        'no_hp' => $no_hp,
        'tgl_masuk' => $tgl_masuk,
        'tgl_keluar' => $tgl_keluar);
    $where = array(
        'id' => $id);
    $this->M_dudi->update_data($where,$data,'dudi');
    redirect('index.php/dudi');
}
function hapus_dudi($id){
    $where = array(
    'id' => $id);
// menghapus data anggota dari database sesuai id
    $this->M_dudi->delete_data($where,'dudi');
// mengalihkan halaman ke halaman data anggota
    redirect(base_url().'index.php/dudi');
}

}