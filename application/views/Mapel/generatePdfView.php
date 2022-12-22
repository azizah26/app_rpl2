<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Mapel</title>
<center><h1>Data Mapel</h1></center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                    <th>No</th>
 <th>Kd Mapel</th>
 <th>Nama Mapel</th>

 </tr>
 </thead>
 
 <?php 
 $no = 1;
 foreach($mapel as $a){
 ?>
 <tr>
 <td><?php echo $no++; ?></td>
 <td><?php echo $a->kd_mapel; ?></td>
 <td><?php echo $a->nama_mapel; ?></td>
 </tr>
 <?php } ?>
 </table>
 </div>