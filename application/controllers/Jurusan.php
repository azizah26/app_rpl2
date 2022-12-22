<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_jurusan');
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
       
        $data['jurusan'] = $this->M_jurusan->get_data()->result();
		$this->load->view('jurusan/v_jurusan',$data);
        $this->load->view('template/footer');
	}
	function tambah(){
		$this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
		$this->load->view('jurusan/v_inputjurusan');
		$this->load->view('template/footer');
		}
		function tambah_aksi(){
			$kd_jurusan = $this->input->post('kd_jurusan');
			$nama_jurusan = $this->input->post('nama_jurusan');
			$data = array(
			'kd_jurusan' => $kd_jurusan,
			'nama_jurusan' => $nama_jurusan
			);
			$this->M_jurusan->insert_data($data,'jurusan');
			redirect('index.php/jurusan');
			}
	
		function hapus($id_jurusan){
				$where = array('id_jurusan' => $id_jurusan);
				$this->M_jurusan->hapus_data($where,'jurusan');
				redirect('index.php/jurusan');
				}
		function edit($id_jurusan){
					$where = array('id_jurusan' => $id_jurusan);
					$data['jurusan'] = $this->M_jurusan->edit_data($where,'jurusan')->result();
					$this->load->view('template/header');
        			$this->load->view('template/wrapper');
        			$this->load->view('template/navbar');
					$this->load->view('jurusan/v_editjurusan',$data);
					$this->load->view('template/footer');
		}
		function update(){
			$id_jurusan = $this->input->post('id_jurusan');
			$kd_jurusan = $this->input->post('kd_jurusan');
			$nama_jurusan = $this->input->post('nama_jurusan');
			$data = array(
			'kd_jurusan' => $kd_jurusan,
			'nama_jurusan' => $nama_jurusan,
			);
			$where = array(
			'id_jurusan' => $id_jurusan
			);
			$this->M_jurusan->update_data($where,$data,'jurusan');
			redirect('index.php/jurusan');
			}
}