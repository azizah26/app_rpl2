<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data User</h1>
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
			<form action="<?= base_url('index.php/Excel/upload'); ?>" method="post" enctype="multipart/form-data">
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
    <a href="<?php echo base_url('index.php/user/tambah');?>" class='btn btn-sm 
    btn-primary pull-right'><i class="fas fa-user-plus"></i>user Baru</a>
    
    <a href="<?php echo base_url('index.php/GeneratePdfController/index');?>" class='btn btn-sm 
    btn-danger pull-right'><i class="fas fa-user-plus"></i>Pdf</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id_user="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
<th width="1%">No</th>
<th>Nama User</th>
<th>Level</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
 
<?php 
$no = 1;
foreach ($user as $u){ 
?>
<tr>
<td><?php echo $no++?></td>
<td><?php echo $u->nama_user ?></td>
<td><?php echo $u->level ?></td>
<td>
<a href="<?php echo base_url().'index.php/user/edit/'.$u->id_user; ?>" 
class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i> Edit</a>
<a href="<?php echo base_url().'index.php/user/hapus/'.$u->id_user; ?>" 
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


