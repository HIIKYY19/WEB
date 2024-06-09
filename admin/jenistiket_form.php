<?php
error_reporting(0);
$obj_jenistiket = new jenistiket();
$data_jenistiket = $obj_jenistiket->datajenistiket();

$idedit = $_REQUEST ['idedit'];
$obj_jenistiket = new jenistiket();
if(!empty($idedit)){
  $jenis_tiket = $obj_jenistiket->getjenistiket($idedit);
}else {
  $jenis_tiket = array();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="jenistiket_controller.php" method="POST">
    <h2 align="center">Form Jenis Tiket</h2>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" value="<?= $jenis_tiket['nama']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Max BAwaan</label> 
    <div class="col-8">
      <input id="text" name="max_kapasitas_bawaan" type="text" class="form-control" value="<?= $jenis_tiket['max_kapasitas_bawaan']?>">
    </div>
  </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
      if(empty($idedit)){?> 
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
      <?php } else { ?>
      <button name="proses" value="ubah" type="submit" class="btn btn-warning">Ubah</button>
      <?php } ?>
      <input type="hidden" name="idx" value="<?= $idedit;?>">
    </div>
  </div>
</form>