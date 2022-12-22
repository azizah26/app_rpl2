<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportControllerDudi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index()
	{
		$this->load->model('ImportModelDudi');
		$data = array(
			'list_data'	=> $this->ImportModelDudi->getData()
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
					$nama_dudi = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$alamat_dudi = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $nama_pembimbing = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$no_hp = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$tgl_masuk = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $tgl_keluar = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$temp_data[] = array(
						'nama_dudi'	=> $nama_dudi,
						'alamat_dudi'	=> $alamat_dudi,
                        'nama_pembimbing'	=> $nama_pembimbing,
						'no_hp'	=> $no_hp,
						'tgl_masuk'	=> $tgl_masuk,
                        'tgl_keluar'	=> $tgl_keluar,
				
					); 	
				}
			}
			$this->load->model('ImportModelDudi');
			$insert = $this->ImportModelDudi->insert($temp_data);
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