<center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1">
            <thead class="bg-secondary text-light">
  <thead>
                
                    <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Tingkat Kelas</th>
                    <th>Jurusan</th>
                   
                    </tr>
                </thead>

                
                <tbody>
                <?php
$no = 1;
foreach($kelas as $u){
?>
<tr>
<td> <?php echo $no++ ?> </td>
<td> <?php echo $u->nama_kelas ?></td>
<td> <?php echo $u->tingkat_kelas ?></td>
<td> <?php echo $u->jurusan ?></td>
<td>
</tr>
<?php } ?>
</div>
<center>
