<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Pembina Ekskul</title>
<center><h1>Data Pembina Ekskul</h1></center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%">
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