<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfJurusan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_jurusan');
		$this->load->helper('url');
		}

    function index()
    {
        $data['jurusan'] = $this->m_jurusan->get_data()->result();
        $this->load->library('pdf');
        $this->load->view('jurusan/v_jurusan',$data);
        $html = $this->load->view('jurusan/pdfJurusan', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>