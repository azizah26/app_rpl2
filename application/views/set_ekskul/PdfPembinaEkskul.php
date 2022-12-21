<!DOCTYPE html>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                    <th>No</th>
                <th>KD Ekstrakurikuler</th>
                <th>Nama Pembina</th>
                <th>Semester</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($pembinaekskul as $p){ ?>
 <tr>
 <td><?php echo $no++ ?></td>
<td><?php echo $p->id_ekskul ?></td>
<td><?php echo $p->nama_pembina ?></td>
<td><?php echo $p->semester ?></td>
</tr>
<?php } ?>
</tbody>
</table>