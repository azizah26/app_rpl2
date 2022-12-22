<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPdfDudi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_dudi');
		}

    function index()
    {
        $data['dudi'] = $this->M_dudi->get_data('dudi')->result();
        $this->load->library('pdf');
        $this->load->view('dudi/v_dudi',$data);
        $html = $this->load->view('dudi/PdfDudi', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>