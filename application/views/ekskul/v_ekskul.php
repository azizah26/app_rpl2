<!-- Begin Page Content -->
<div class="container-fluid">

    

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Ekskul</h1>
<p class="mb-4">Data Pokok Pendidikan atau Dapodik adalah sistem pendataan (database) berskala nasional yang
         terintegrasi dengan data kependidikan lainnya. Dapodik merupakan sumber data utama dari berbagai 
         Program perencanaan Pendidikan Indonesia dalam mewujudkan insan yang cerdas dan kompetitif.
    <a target="_blank"></a></p>
    
    <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/ImportControllerEkskul/import_excel'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    		Import		
					</button>
				</div>
			</form>
		</div>
	</div>
</div><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <center><h6 class="m-0 font-weight-bold text-primary" >Data Ekskul</h6></center>
            </div>
    <div class="card-body">
    <a href="<?php echo base_url('index.php/ekskul/tambah');?>" class='btn btn-sm 
    btn-primary pull-right'><i class="fa-solid fa-notes-medical"></i>Ekskul Baru</a>
    
    <a href="<?php echo base_url('index.php/ControllerPdfEkskul/index');?>" target="_blank" class='btn btn-sm 
    btn-info pull-right'><i class="fas fa-user-plus"></i>Pdf</a>
   
   <br><br>
        <div class="table-responsive">
            <table class="table table-bordered  table-hover table-default" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-default">
                
                    <tr>
                <th>No</th>
                <th>KD Ekskul</th>
                <th>Nama Ekskul</th>
                <th width="18%">Opsi</th>
             </tr>
        </thead>
                
                <tbody>
                <?php
$no = 1;
foreach($ekskul as $u){
?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $u->kd_ekskul ?></td>
<td><?php echo $u->nama_ekskul ?></td>
<td><center>
<a href="<?php echo base_url().'index.php/ekskul/edit/'.$u->id_ekskul; ?>" 
class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
<a href="<?php echo base_url().'index.php/ekskul/hapus/'.$u->id_ekskul; ?>" 
class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
</center>
</td>
</tr>
<?php } ?>
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
