<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPdfPembinaEkskul extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pembinaekskul');
		$this->load->helper('url');
		}

    function index()
    {
        $data['pembinaekskul'] = $this->m_pembinaekskul->get_data('pembina_ekskul')->result();
        $this->load->library('pdf');
        $this->load->view('set_ekskul/v_pembinaekskul',$data);
        $html = $this->load->view('set_ekskul/PdfPembinaEkskul', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>