<div class="card-body">
<div class="table-responsive">
 <table class="table table-striped" border="1" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-secondary text-light">
 <thead>
 <tr>
 <th width="10%">No</th>
 <th>Kd Mapel</th>
 <th>Guru Mapel</th>
 <th>Id Kelas</th>
 <th>Jam Pelajaran</th>

 </tr>
 </thead>
 
 <?php 
 $no = 1;
 foreach($setMapel as $a){
 ?>
 <tr>
 <td><?php echo $no++; ?></td>
 <td><?php echo $a->kd_mapel; ?></td>
 <td><?php echo $a->guru_mapel; ?></td>
 <td><?php echo $a->id_kelas; ?></td>
 <td><?php echo $a->jam_pelajaran; ?></td>
 </tr>
 <?php } ?>
 </table>
 </div>