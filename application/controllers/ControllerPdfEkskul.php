<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPdfEkskul extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_ekskul');
		$this->load->helper('url');
		}

    function index()
    {
        $data['ekskul'] = $this->m_ekskul->get_data('ekskul')->result();
        $this->load->library('pdf');
        $this->load->view('ekskul/v_ekskul',$data);
        $html = $this->load->view('ekskul/PdfEkskul', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>