<?php
class pendudukController extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penduduk');
	}
 
	public function index()
	{
		$data['graph'] = $this->penduduk->graph();
		$this->load->view('chart', $data);
		

		$keyword = $this->input->get('keyword');
		$data = $this->penduduk->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
	}
 
}