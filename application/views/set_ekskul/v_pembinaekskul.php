<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pembina Ekstrakurikuler</h1>

        <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>

			<form action="<?= base_url('index.php/ImportControllerPembinaEkskul/import_excel'); ?>" method="post" enctype="multipart/form-data">

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
    <a href="<?php echo base_url('index.php/SetPembinaEkskul/tambah');?>" class='btn btn-sm 
    btn-primary pull-right'><i class="fa-solid fa-notes-medical"></i>Pembina Baru</a>
    
    <a href="<?php echo base_url('index.php/ControllerPdfPembinaEkskul/index');?>" class='btn btn-sm 
    btn-danger pull-right'><i class="fas fa-user-plus"></i>Pdf</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
<th width="1%">No</th>
<th>KD Ekstrakurikuler</th>
<th>Nama Pembina</th>
<th>semester</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
 
<?php 
$no = 1;
foreach ($ekskul as $p){ 
?>
<tr>
<td><?php echo $no++?></td>
<td><?php echo $p->kd_ekskul ?></td>
<td><?php echo $p->nama_pembina?></td>
<td><?php echo $p->semester ?></td>
<td>
<a href="<?php echo base_url().'index.php/SetPembinaEkskul/edit/'.$p->id; ?>" 
class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i> Edit</a>
<a href="<?php echo base_url().'index.php/SetPembinaEkskul/hapus/'.$p->id; ?>" 
class="btn btn-sm btn-success"><i class="fa fa-trash"></i> Hapus</a>
</td>
</tr>
<?php } ?>
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
