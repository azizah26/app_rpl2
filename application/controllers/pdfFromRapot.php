<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfFromRapot extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_from_rapot');
		$this->load->helper('url');
		}

    function index()
    {
        $data['from_rapot'] = $this->m_from_rapot->get_data()->result();
        $this->load->library('pdf');
        $this->load->view('from_rapot/v_from_rapot',$data);
        $html = $this->load->view('from_rapot/pdffrom_rapot', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>