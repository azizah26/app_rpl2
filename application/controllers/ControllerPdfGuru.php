<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPdfGuru extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_guru');
		$this->load->helper('url');
		}

    function index()
    {
        $data['guru'] = $this->m_guru->get_data('guru')->result();
        $this->load->library('pdf');
        $this->load->view('guru/v_guru',$data);
        $html = $this->load->view('guru/PdfGuru', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>