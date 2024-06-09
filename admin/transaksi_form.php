<?php
error_reporting(0);
$model = new Transaksi();
$data_transaksi = $model->DataTransaksi();

$model1 = new penumpang();
$data_penumpang = $model1->datapenumpang();

$model2 = new Tiket();
$data_tiket = $model2->dataTiket();

$idedit = $_REQUEST ['idedit'];
$obj_transaksi = new Transaksi();
if(!empty($idedit)){
  $transaksi = $obj_transaksi->getTransaksi($idedit);
}else {
  $transaksi = array();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="transaksi_controller.php" method="POST">
    <h2 align="center">Transaksi</h2>


  <div class="form-group row">
    <label for="total_tiket" class="col-4 col-form-label">total tiket</label> 
    <div class="col-8">
      <input id="total_tiket" name="total_tiket" placeholder="Masukan total_tiket Produk" type="text" class="form-control" value="<?= $transaksi ['total_tiket'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="totalharga" class="col-4 col-form-label">total harga</label> 
    <div class="col-8">
      <input id="totalharga" name="totalharga" placeholder="Masukan totalharga Produk" type="text" class="form-control" value="<?= $transaksi ['totalharga'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="penumpang_id" class="col-4 col-form-label">penumpang_id</label> 
    <div class="col-8">
      <select id="select1" name="jenis_armada" class="custom-select">
        <option value="rabbit">----- Pilih penumpang-----</option>
        <?php
        foreach ($data_penumpang as $penumpang){
          $sel = ($penumpang['id'] == $transaksi['penumpang_id']) ? 'selected' : '';
            ?>
            <option value="<?= $penumpang['id']; ?>"<?= $sel; ?>><?= $penumpang ['nama']?></option>
        <?php } ?>
      </select>
    </div>
  </div>



  <div class="form-group row">
    <label for="tiket_id" class="col-4 col-form-label">tiket_id</label> 
    <div class="col-8">
      <select id="select1" name="jenis_armada" class="custom-select">
        <option value="rabbit">----- Pilih Tiket ID-----</option>
        <?php
        foreach ($data_tiket as $tiket){
          $sel = ($tiket['id_tiket'] == $transaksi['tiket_id']) ? 'selected' : '';
            ?>
            <option value="<?= $tiket['id_tiket']; ?>"<?= $sel; ?>><?= $tiket ['id_tiket']?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $transaksi ['tanggal'] ?>">
    </div>
  </div>
  
  <div class="form-group row">
        <div class="offset-4 col-8">
            <?php if (empty($idedit)) { ?>
                <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
            <?php } else { ?>
                <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
            <?php } ?>
            <input type="hidden" name="idx" value="<?= $idedit; ?>">
        </div>
    </div>
</form>