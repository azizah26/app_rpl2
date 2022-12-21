<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPdfSetDudi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_set_dudi');
		$this->load->helper('url');
		}

    function index()
    {
        $data['set_dudi'] = $this->M_set_dudi->get_data('set_dudi')->result();
        $this->load->library('pdf');
        $this->load->view('set_dudi/v_set_dudi',$data);
        $html = $this->load->view('set_dudi/Pdfset_dudi', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>