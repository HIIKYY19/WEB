<?php
error_reporting(0);
$obj_penumpang = new penumpang();

$data_penumpang = $obj_penumpang->datapenumpang();
$idedit = $_REQUEST ['idedit'];
$obj_penumpang = new penumpang();
if(!empty($idedit)){
  $penumpang = $obj_penumpang->getpenumpang($idedit);
}else {
  $penumpang = array();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="penumpang_controller.php" method="POST">
    <h2 align="center">Form Penumpang</h2>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control" value="<?= $penumpang['nama']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="text" name="gender" type="text" class="form-control" value="<?= $penumpang['gender']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">No. Telepon</label> 
    <div class="col-8">
      <input id="text2" name="no_telepon" type="text" class="form-control" value="<?= $penumpang['no_telepon']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Berat Bawaan</label> 
    <div class="col-8">
      <input id="text3" name="berat_bawaan" type="text" class="form-control" value="<?= $penumpang['berat_bawaan']?>">
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