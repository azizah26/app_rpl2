<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfkelas extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('M_kelas');
		$this->load->helper('url');
		}

    function index()
    {
        $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
        $this->load->library('pdf');
        $this->load->view('kelas/v_kelas',$data);
        $html = $this->load->view('kelas/pdfkelas', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>