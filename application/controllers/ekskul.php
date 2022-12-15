<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ekskul extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_ekskul');
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
    $this->load->view('template/header');
    $this->load->view('template/wrapper');
    $this->load->view('template/navbar');
       
    $data['ekskul'] = $this->m_ekskul->get_data('ekskul')->result();
		$this->load->view('ekskul/v_ekskul',$data);
		$this->load->view('template/footer');	
	}
function tambah(){
	$this->load->view('template/wrapper');
	$this->load->view('template/header');
	$this->load->view('template/navbar');
	$this->load->view('ekskul/v_input_ekskul');
	$this->load->view('template/footer');	
	}
function tambah_aksi(){
	$kd_ekskul = $this->input->post('kd_ekskul');
	$nama_ekskul = $this->input->post('nama_ekskul');
		
	$data = array(
		'kd_ekskul' => $kd_ekskul,
		'nama_ekskul' => $nama_ekskul
		);
	$this->m_ekskul->insert_data($data,'ekskul');
	redirect('index.php/ekskul');
	}
function edit($id_ekskul){
	$where = array('id_ekskul' => $id_ekskul);
	$data['ekskul'] = $this->m_ekskul->edit_data($where,'ekskul')->result();
	$this->load->view('template/wrapper');
	$this->load->view('template/header');
	$this->load->view('template/navbar');
	$this->load->view('ekskul/v_edit_ekskul',$data);
	$this->load->view('template/footer');	
	}
function update(){
	$id_ekskul = $this->input->post('id_ekskul');
	$kd_ekskul = $this->input->post('kd_ekskul');
	$nama_ekskul = $this->input->post('nama_ekskul');
		
$data = array(
		'kd_ekskul' => $kd_ekskul,
		'nama_ekskul' => $nama_ekskul
		);
$where = array(
		'id_ekskul' => $id_ekskul
	);
	$this->m_ekskul->update_data($where,$data,'ekskul');
	redirect('index.php/ekskul');
	}
function hapus($id_ekskul){
	$where = array('id_ekskul' => $id_ekskul);
	$this->m_ekskul->delete_data($where,'ekskul');
	redirect('index.php/ekskul');
	}
}