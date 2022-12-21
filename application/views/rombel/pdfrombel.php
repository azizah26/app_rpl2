
<div class="card-body">
        <div class="table-responsive">
        <center>
        <table class="table table-striped" border="1">
            <thead class="bg-secondary text-light">
            <thead>
                
                <tr>
                <th>Nama Kelas</th>
                <th>Kurikulum</th>
                <th>NIS</th>
                <th>Nama Rombel</th>
                <th width="18%">Aksi</th>
                </tr>
            </thead>

            
            <tbody>
            <?php
$no = 1;
foreach($rombel as $u){
?>
<tr>
<td><?php echo $u->id_kelas ?></td>
<td><?php echo $u->kurikulum ?></td>
<td><?php echo $u->nis ?></td>
<td><?php echo $u->nama_rombel ?></td>
<td>
    <?php } ?>
<center>
