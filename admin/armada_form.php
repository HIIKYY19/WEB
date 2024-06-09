<?php
error_reporting(0);
$data_armada = new Jenis_Armada();
$data_jenisArmada = $data_armada->dataArmada();

$idedit = $_REQUEST ['idedit'];
$obj_armada = new Jenis_Armada();
if(!empty($idedit)){
  $armada = $obj_armada->getDataArmada($idedit);
} else {
  $armada = array();
}

?>

<!-- form mulai -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Pengisian Data Armada</h1><br>
<form action="armada_controller.php" method="POST">
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Jenis Armada</label> 
    <div class="col-8">
      <select id="select1" name="jenis_armada" class="custom-select">
        <option value="rabbit">----- Pilih Jenis Armada-----</option>
        <option value="Bus">Bus</option>
        <option value="Kapal">kapal</option>
        <option value="Pesawat">pesawat</option>
        <option value="Kereta">kereta</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Armada</label> 
    <div class="col-8">
      <input id="text" name="nama_armada" type="text" class="form-control" value="<?= $armada ['nama_armada'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Maximum Bagasi</label> 
    <div class="col-8">
      <input id="text1" name="kapasitas" type="text" class="form-control" value="<?= $armada ['kapasitas'] ?>">
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