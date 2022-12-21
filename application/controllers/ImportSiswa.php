<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportSiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index()
	{
		$this->load->model('ImportSiswa');
		$data = array(
			'list_data'	=> $this->ImportSiswa->getData()
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
					$nis = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nisn = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$nama = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$jenis_kelamin = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$tmpt_lahir = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$tgl_lahir = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$alamat_siswa = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $agama = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $no_hp_siswa = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $nama_ibu = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $pekerjaan_ibu = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $alamat_orang_tua = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $nama_ayah = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $pekerjaan_ayah = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $no_ijazah = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $asal_sekolah = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $anak_ke = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $tahun_ijazah = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                    $tgl_masuk = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
					$temp_data[] = array(
						'nis'	=> $nis,
						'nisn'	=> $nisn,
						'nama'	=> $nama,
						'jenis_kelamin'	=> $jenis_kelamin,
						'tmpt_lahir'	=> $tmpt_lahir,
						'tgl_lahir'	=> $tgl_lahir,
						'alamat_siswa'	=> $alamat_siswa,
                        'agama'	=> $agama,
                        'no_hp_siswa'	=> $no_hp_siswa,
                        'nama_ibu'	=> $nama_ibu,
                        'pekerjaan_ibu'	=> $pekerjaan_ibu,
                        'alamat_orang_tua'	=> $alamat_orang_tua,
                        'nama_ayah'	=> $nama_ayah,
                        'pekerjaan_ayah'	=> $pekerjaan_ayah,
                        'no_ijazah'	=> $no_ijazah,
                        'asal_sekolah'	=> $asal_sekolah,
                        'anak_ke'	=> $anak_ke,
                        'tahun_ijazah'	=> $tahun_ijazah,
                        'tgl_masuk'	=> $tgl_masuk,
                        
                       
					); 	
				}
			}
			$this->load->model('M_ImportSiswa');
			$insert = $this->M_ImportSiswa->insert($temp_data);
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