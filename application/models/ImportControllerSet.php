<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportControllerSet extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index()
	{
		$this->load->model('ImportModelSet');
		$data = array(
			'setMapel'	=> $this->ImportModelSet->getData()
		);
		$this->load->view('set_mapel/import_excelSet.php',$data);
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

					$kd_mapel = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$guru_mapel = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $id_kelas = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $jam_pelajaran = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$temp_data[] = array(
						'kd_mapel'	=> $kd_mapel,
						'guru_mapel'	=> $guru_mapel,
                        'id_kelas'	=> $id_kelas,
                        'jam_pelajaran'	=> $jam_pelajaran,
					); 	
				}
			}
			$this->load->model('ImportModelSet');
			$insert = $this->ImportModelSet->insert($temp_data);
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