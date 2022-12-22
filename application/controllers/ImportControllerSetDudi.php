<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportControllerSetDudi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index()
	{
		$this->load->model('ImportModelSetDudi');
		$data = array(
			'list_data'	=> $this->ImportModelSetDudi->getData()
		);
		$this->load->view('import_excel.php',$data);
	}

	public function import_excel(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$id = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nama_pembimbing = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $jurusan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$temp_data[] = array(
						'id'	=> $id,
						'nama_pembimbing'	=> $nama_pembimbing,
                        'jurusan'	=> $jurusan,
					); 	
				}
			}
			$this->load->model('ImportModelSetDudi');
			$insert = $this->ImportModelSetDudi->insert($temp_data);
			if($insert){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}

}