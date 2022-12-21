<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportControllerPembinaEkskul extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index()
	{
<<<<<<< HEAD
		$this->load->model('ImportModelPembinaEkskul');
		$data = array(
			'list_data'	=> $this->ImportModelPembinaEkskul->getData()
=======
		$this->load->model('M_ImportPembinaEkskul');
		$data = array(
			'list_data'	=> $this->M_ImportPembinaEkskul->getData()
>>>>>>> 1236b331327ed98465815bce75c620c4c97c857e
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
<<<<<<< HEAD
					$kd_ekskul = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nama_pembina = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $semester = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$temp_data[] = array(
						'kd_ekskul'	=> $kd_ekskul,
						'nama_pembina'	=> $nama_pembina,
                        'semester'	=> $semester,
					); 	
				}
			}
			$this->load->model('ImportModelPembinaEkskul');
			$insert = $this->ImportModelPembinaEkskul->insert($temp_data);
=======
					$id_ekskul = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nama_pembina = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$semester = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$temp_data[] = array(
						'id_ekskul'	=> $id_ekskul,
						'nama_pembina'	=> $nama_pembina,
						'semester'	=> $semester,
					); 	
				}
			}
			$this->load->model('M_ImportPembinaEkskul');
			$insert = $this->M_ImportPembinaEkskul->insert($temp_data);
>>>>>>> 1236b331327ed98465815bce75c620c4c97c857e
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