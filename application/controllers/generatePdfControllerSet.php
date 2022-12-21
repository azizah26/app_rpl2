<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generatePdfControllerSet extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_SetMapel');
		}

    function index()
    {
        $data['setMapel'] = $this->M_SetMapel->get_data('setMapel')->result();
        $this->load->library('pdf');
        $this->load->view('set_mapel/v_setMapel',$data);
        $html = $this->load->view('set_mapel/generatePdfSet', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>