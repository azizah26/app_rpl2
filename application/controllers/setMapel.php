<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setMapel extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_SetMapel');
    $this->load->model('M_mapel');
    $this->load->model('M_guru');
    $this->load->model('M_kelas');

	
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
       
        $data['set_mapel'] = $this->M_SetMapel->get_data('set_mapel')->result();
		$this->load->view('set_mapel/v_SetMapel',$data);
        $this->load->view('template/footer');
	}
	function tambah(){
        $data['mapel'] = $this->M_mapel->get_data('mapel')->result();
        $data['guru'] = $this->M_guru->get_data('guru')->result();
        $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
        $this->load->view('set_mapel/tampilann',$data);
        $this->load->view('template/footer');
       
    }

    function tambah_aksi(){
        $kd_mapel = $this->input->post('kd_mapel');
        $guru_mapel = $this->input->post('guru_mapel');
        $id_kelas = $this->input->post('id_kelas');
        $jam_pelajaran = $this->input->post('jam_pelajaran');
        $data = array(
            'kd_mapel' => $kd_mapel,
            'guru_mapel' => $guru_mapel,
            'id_kelas' => $id_kelas, 
            'jam_pelajaran' => $jam_pelajaran, 
        );
        $this->M_SetMapel->insert_data($data,'set_mapel');
        redirect('index.php/setMapel');
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->M_SetMapel->hapus_data($where,'set_mapel');
        redirect('index.php/setMapel');
    }

    function edit($id){
        $where = array('id' => $id);
        $data['set_mapel'] = $this->M_SetMapel->edit_data($where,'set_mapel')->result();
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
        $this->load->view('set_mapel/v_editSetMapel',$data);
        $this->load->view('template/footer');
       
    }

    function update(){
        $kd_mapel = $this->input->post('kd_mapel');
        $guru_mapel = $this->input->post('guru_mapel');
        $id_kelas = $this->input->post('id_kelas');
        $jam_pelajaran = $this->input->post('jam_pelajaran');
        $data = array(
            'kd_mapel' => $kd_mapel,
            'guru_mapel' => $guru_mapel,
            'id_kelas' => $id_kelas, 
            'jam_pelajaran' => $jam_pelajaran,
        );
        $where = array(
        'id' => $id
        );
        $this->M_SetMapel->update_data($where,$data,'set_mapel');
        redirect('index.php/setMapel');
        }
}