<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mapel extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_mapel');
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
       
        $data['mapel'] = $this->M_mapel->get_data()->result();
		$this->load->view('mapel/v_mapel',$data);
        $this->load->view('template/footer');
	}
	function tambah(){
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
        $this->load->view('mapel/tampil');
        $this->load->view('template/footer');
       
    }

    function tambah_aksi(){
        $id_mapel = $this->input->post('id_mapel');
        $kd_mapel = $this->input->post('kd_mapel');
        $nama_mapel = $this->input->post('nama_mapel');
        $data = array(
            'id_mapel' => $id_mapel,
            'kd_mapel' => $kd_mapel,
            'nama_mapel' => $nama_mapel, 
        );
        $this->M_mapel->insert_data($data,'mapel');
        redirect('index.php/mapel');
    }

    function hapus($id_mapel){
        $where = array('id_mapel' => $id_mapel);
        $this->M_mapel->delete_data($where,'mapel');
        redirect('index.php/mapel');
    }

    function edit($id_mapel){
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
        $where = array('id_mapel' => $id_mapel);
        $data['mapel'] = $this->M_mapel->edit_data($where,'mapel')->result();
        $this->load->view('mapel/v_editMapel',$data);
        $this->load->view('template/footer');
       
    }

    function update(){
        $id_mapel = $this->input->post('id_mapel');
        $kd_mapel = $this->input->post('kd_mapel');
        $nama_mapel = $this->input->post('nama_mapel');
        $data = array(
        'id_mapel' => $id_mapel,
        'kd_mapel' => $kd_mapel,
        'nama_mapel' => $nama_mapel,
        );
        $where = array(
        'id_mapel' => $id_mapel
        );
        $this->M_mapel->update_data($where,$data,'mapel');
        redirect('index.php/mapel');
        }
}