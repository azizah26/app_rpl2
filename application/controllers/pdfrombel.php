<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfrombel extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_rombel');
		$this->load->helper('url');
		}

    function index()
    {
        $data['rombel'] = $this->m_rombel->get_data('rombel')->result();
        $this->load->library('pdf');
        $this->load->view('rombel/v_rombel',$data);
        $html = $this->load->view('rombel/pdfrombel', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>