<?php
error_reporting(0);
//mengambil data rute
$objRute = new Rute();
$rs = $objRute->dataRute();

//untuk edit dan hapus
$idedit = $_REQUEST ['idedit'];
$obj_rute = new Rute();
if(!empty($idedit)){
  $rute = $obj_rute ->getDatarute($idedit);
} else {
  $rute = array();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Pengisian Data Rute</h1><br>
<form action="rute_controller.php" method="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="text1" name="kode" type="text" class="form-control" value="<?= $rute ['kode'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Kota Asal</label> 
    <div class="col-8">
      <input id="text2" name="kota_asal" type="text" class="form-control" value="<?= $rute ['kota_asal'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Kota Tujuan</label> 
    <div class="col-8">
      <input id="text3" name="kota_tujuan" type="text" class="form-control" value="<?= $rute ['kota_tujuan'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jarak</label> 
    <div class="col-8">
      <input id="text" name="jarak" type="text" class="form-control" value="<?= $rute ['jarak'] ?>">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
    if(empty($idedit)){ ?>
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
      <?php } else {
        ?>
        <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
      <?php } ?>
      <input type="hidden" name="idx" value="<?= $idedit; ?> ">

    </div>
  </div>
</form>