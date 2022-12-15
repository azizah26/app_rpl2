<div class="card-body">
<div class="table-responsive">
 <table class="table table-striped" border="1" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-secondary text-light">
 <thead>
 <tr>
 <th width="10%">No</th>
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