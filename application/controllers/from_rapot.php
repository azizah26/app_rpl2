<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class from_rapot extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_from_rapot');
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
       
		$data['from_rapot'] = $this->M_from_rapot->get_data()->result();
		$this->load->view('from_rapot/v_from_rapot',$data);
        $this->load->view('template/footer');
	}
	function tambah(){
		$this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
		$this->load->view('from_rapot/v_inputfromrapot');
		$this->load->view('template/footer');
		}
		function tambah_aksi(){
			$nama_mapel = $this->input->post('nama_mapel');
			$semester = $this->input->post('semester');
			$no_urut = $this->input->post('no_urut');
			$data = array(
			'nama_mapel' => $nama_mapel,
			'semester' => $semester,
			'no_urut' => $no_urut,
			);
			$this->M_from_rapot->insert_data($data,'from_rapot');
			redirect('index.php/from_rapot');
			}
	
		function hapus($id_mapel){
				$where = array('id_mapel' => $id_mapel);
				$this->M_from_rapot->delete_data($where,'from_rapot');
				redirect('index.php/from_rapot');
				}
		function edit($id_mapel){
			$this->load->view('template/header');
        			$this->load->view('template/wrapper');
        			$this->load->view('template/navbar');
					$where = array('id_mapel' => $id_mapel);
					$data['from_rapot'] = $this->M_from_rapot->edit_data($where,'from_rapot')->result();
					$this->load->view('from_rapot/v_editfromrapot',$data);
					$this->load->view('template/footer');
		}
		function update(){
			$id_mapel = $this->input->post('id_mapel');
			$nama_mapel = $this->input->post('nama_mapel');
			$semester = $this->input->post('semester');
			$no_urut = $this->input->post('no_urut');
			$data = array(
			'nama_mapel' => $nama_mapel,
			'semester' => $semester,
			'no_urut' => $no_urut,
			);
			$where = array(
			'id_mapel' => $id_mapel
			);
			$this->M_from_rapot->update_data($where,$data,'from_rapot');
			redirect('index.php/from_rapot');
			}
}