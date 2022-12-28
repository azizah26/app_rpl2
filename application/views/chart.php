<?php
$this->load->view('template/header');
        $this->load->view('template/navbar');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Siswa  - Juju.com</title>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
 
$(function () {
	$('#container').highcharts({
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false
		},
		title: {
			text: 'Data SMKN 1 PURBALINGGA'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %',
					style: {
						color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					}
				}
			}
		},
		series: [{
			type: 'pie',
			name: 'Persentase Siswa',
			data: [
					<?php 
					// data yang diambil dari database
					if(count($graph)>0)
					{
					   foreach ($graph as $data) {
					   echo "['" .$data->nama . "'," . $data->jumlah ."],\n";
					   }
					}
					?>
			]
		}]
	});
});
 
</script>
</div>
</div>
</div>
</div>
</head>
<body>
 
<div id="container"></div>

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">

	<a href="<?php echo base_url('index.php/siswa');?>" 
   class='btn btn-sm btn-primary pull-right'><i class="fa-solid fa-backward"></i></a>
  
<div class="container">
    <div class="row" style="margin-top: 50px">    
        <div class="col-xs-4 col-xs-offset-4">
        	<form action="<?= base_url('index.php/siswa/index/') ?>" method="get">
			    <div class="input-group">
	                <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
	                <span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                    </button>
					</span>
	            </div>
        	</form>
        </div>
	</div>
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 text-center">
			<?php if(!empty($keyword)){ ?>
			<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
			<?php } ?>
			<br>
			<center><h3 class="m-0 font-weight-bold text-primary" >Data Siswa</h3></center>
    </div>
   <br><br>
   <div class="table-responsive">
  
<br><br>
<table class="table table-striped.table-hover table-bordered">
        <thead class="table-secondary">
        	    <tr>
			      <th scope="col">No</th>
			      <th scope="col">NIS</th>
			      <th scope="col">NISN</th>
                  <th scope="col">Nama</th>
			      <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Agama</th>
			      <th scope="col">Tempat Lahir</th>
			      <th scope="col">Tanggal Lahir</th>
			      <th scope="col">Telepon</th>
			      <th scope="col">Alamat Siswa</th>
			   
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($data as $row) { ?>
			    <tr>
			      <th scope="row"><?= $row['id_siswa'] ?></th>
			      <td><?= $row['nis'] ?></td>
			      <td><?= $row['nisn'] ?></td>
                  <td><?= $row['nama'] ?></td>
			      <td><?= $row['jenis_kelamin'] ?></td>
                  <td><?= $row['agama'] ?></td>
			      <td><?= $row['tmpt_lahir'] ?></td>
			      <td><?= $row['tgl_lahir'] ?></td>
                  <td><?= $row['no_hp_siswa'] ?></td>
                  <td><?= $row['alamat_siswa'] ?></td>
			     
			   
			    </tr>
			  	<?php }?>
			  </tbody>
			</table>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
 
</body>
</html>
