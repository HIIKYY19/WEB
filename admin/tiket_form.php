<?php
error_reporting(0);
$model = new Tiket();
$data_Tiket = $model->dataTiket();

$model1 = new Jadwal();
$data_jadwal = $model1->dataJadwal();

$model2 = new jenistiket();
$datajenistiket = $model2->datajenistiket();

$model3 = new Rute();
$data_rute = $model3->dataRute();

$model4 = new Jenis_Armada();
$data_jenisArmada = $model4->dataArmada();


$idedit = $_REQUEST ['idedit'];
$obj_tiket = new Tiket();
if(!empty($idedit)){
  $tiket = $obj_tiket->getDataTiket($idedit);
} else {
  $tiket = array();
}

?>

<!-- form mulai -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Pengisian Data tiket</h1><br>
<form action="tiket_controller.php" method="POST">

<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <input id="text" name="harga" type="text" class="form-control" value="<?= $tiket ['harga'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="jadwal_id" class="col-4 col-form-label">Jadwal</label> 
    <div class="col-8">
      <select id="select1" name="jadwal_id" class="custom-select">
        <option value="rabbit">----- Pilih Jadwal-----</option>
        <?php
        foreach ($data_jadwal as $jadwal){
          $sel = ($jadwal['idjadwal'] == $tiket['jadwal_id']) ? 'selected' : '';
            ?>
            <option value="<?= $jadwal['idjadwal']; ?>"<?= $sel; ?>><?= $jadwal ['jam_berangkat']?> : <?= $jadwal ['jam_sampai']?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="jenis_tiket_id" class="col-4 col-form-label">Kelas Tiket</label> 
    <div class="col-8">
      <select id="select1" name="jenis_tiket_id" class="custom-select">
        <option value="rabbit">----- Pilih Kelas-----</option>
        <?php
        foreach ($datajenistiket as $jenis_tiket){
          $sel = ($jenis_tiket['id'] == $tiket['jenis_tiket_id']) ? 'selected' : '';
            ?>
            <option value="<?= $jenis_tiket['id']; ?>"<?= $sel; ?>><?= $jenis_tiket ['nama']?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="rute_id" class="col-4 col-form-label">Rute</label> 
    <div class="col-8">
      <select id="select1" name="rute_id" class="custom-select">
        <option value="rabbit">----- Pilih Rute-----</option>
        <?php
        foreach ($data_rute as $rute){
          $sel = ($rute['idrute'] == $tiket['rute_id']) ? 'selected' : '';
            ?>
            <option value="<?= $rute['idrute']; ?>"<?= $sel; ?>><?= $rute ['kota_asal']?> - <?= $rute ['kota_tujuan']?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="armada_id" class="col-4 col-form-label">Armada</label> 
    <div class="col-8">
      <select id="select1" name="armada_id" class="custom-select">
        <option value="rabbit">----- Pilih Armada-----</option>
        <?php
        foreach ($data_jenisArmada as $armada){
          $sel = ($armada['idarmada'] == $tiket['armada_id']) ? 'selected' : '';
            ?>
            <option value="<?= $armada['idarmada']; ?>"<?= $sel; ?>><?= $armada ['nama_armada']?> </option>
        <?php } ?>
      </select>
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