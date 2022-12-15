<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>Semester</th>
                    <th>No Urut</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($from_rapot as $u){ ?>
 <tr>
 <td><?php echo $no++ ?></td>
 <td><?php echo $u->nama_mapel ?></td>
 <td><?php echo $u->semester ?></td>
 <td><?php echo $u->no_urut ?></td>
</tr>
<?php } ?>
</tbody>
</table>