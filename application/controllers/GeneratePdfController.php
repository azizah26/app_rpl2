<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneratePdfController extends CI_Controller {
    function __construct(){
		parent::__construct();
	$this->load->model('m_siswa');
$this->load->helper('url');
	}

    function index()
    {   
        $data['siswa'] = $this->m_siswa->get_data()->result();
        $this->load->library('pdf');
        $this->load->view('siswa/v_siswa',$data);
        $html = $this->load->view('siswa/GeneratePdfView', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>