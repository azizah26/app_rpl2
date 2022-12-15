<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generatePdfController22 extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('m_mapel');
	$this->load->helper('url');
}

    function index()
    {
        $data['mapel'] = $this->m_mapel->tampil_data()->result();
        $this->load->library('pdf');
        $this->load->view('Mapel/v_mapel',$data);
        $html = $this->load->view('Mapel/generatePdfView', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>