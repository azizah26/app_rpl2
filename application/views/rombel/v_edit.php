<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">  
<title></title>
</head>
<body>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="btn btn-primary">
              EDIT DATA ROMBEL
            </div>
            <div class="card-body">
<?php foreach($rombel as $u){ ?>
<form action="<?php echo base_url(). 'index.php/rombel/update'; ?>" method="post">
<input type="hidden" name="id" value="<?php echo $u->id ?>">
    <div class="form-group">
    <label for="id_kelas">Nama Kelas</label>
    <input name="id_kelas" type="text" class="form-control" placeholder="Masukkan id_kelas"value="<?php echo $u->id_kelas ?>">
    </div><br>
    <div class="form-group">
    <label for="kurikulum">Kurikulum</label>
    <input name="kurikulum" type="text" class="form-control" placeholder="Masukkan kurikulum"value="<?php echo $u->kurikulum ?>">
    </div> <br>
    <div class="form-group">
    <label for="nis">NIS</label>
    <input name="nis" type="text" class="form-control" placeholder="Masukkan nis"value="<?php echo $u->nis ?>">
    </div><br>
    <div class="form-group">
    <label for="nama_rombel">Nama Rombel</label>
    <input name="nama_rombel" type="text" class="form-control" placeholder="Masukkan nama rombel"value="<?php echo $u->nama_rombel ?>">
    </div><br>
    <center> <button type="submit" class="btn btn-success">SIMPAN</button> </center>
</form>
</div>
</div>
</div>
</div>
<?php } ?>
</body>
</html>