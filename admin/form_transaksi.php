<?php
$obj_transaksi = new Transaksi();
$data_transaksi = $obj_transaksi->DataTransaksi();

$idedit = isset($_REQUEST['idedit']) ? $_REQUEST['idedit'] : null;
$row = array('harga' => '', 'total_tiket' => '', 'totalharga' => '', 'penumpang_id' => ''); // Inisialisasi array dengan nilai default

if (!empty($idedit)) {
    $row = $obj_transaksi->getTransaksi($idedit);
    } else {
    $row = array('harga' => '', 'total_tiket' => '', 'totalharga' => ''); // Inisialisasi array dengan nilai default

}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="transaksi_controller.php" method="POST">
    <h2 align="center">Transaksi</h2>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="harga" name="harga" type="text" class="form-control" value="<?= $row ['harga'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="total_tiket" class="col-4 col-form-label">total tiket</label> 
    <div class="col-8">
      <input id="total_tiket" name="total_tiket" placeholder="Masukan total_tiket Produk" type="text" class="form-control" value="<?= $row ['total_tiket'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="totalharga" class="col-4 col-form-label">total harga</label> 
    <div class="col-8">
      <input id="totalharga" name="totalharga" placeholder="Masukan totalharga Produk" type="text" class="form-control" value="<?= $row ['totalharga'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="penumpang_id" class="col-4 col-form-label">penumpang_id</label> 
    <div class="col-8">
      <input id="penumpang_id" name="penumpang_id" type="text" class="form-control" value="<?= $row ['penumpang_id'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="jadwal_id" class="col-4 col-form-label">jadwal_id</label> 
    <div class="col-8">
      <select id="jadwal_id" name="jadwal_id" class="custom-select">
        <option value="1">2023-10-25, 08:00:00 - 10:30:00</option>
        <option value="2">2023-10-26, 14:00:00 - 16:30:00</option>
        <option value="3">2023-10-27, 10:00:00 - 12:30:00</option>
        <option value="4">2023-10-28, 09:00:00 - 11:30:00</option>
        <option value="5">2023-10-29, 16:00:00 - 18:30:00</option>
      </select>
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="Jenis_Tiket_id" class="col-4 col-form-label">Jenis_Tiket_id</label> 
    <div class="col-8">
      <select id="Jenis_Tiket_id" name="Jenis_Tiket_id" class="custom-select">
        <option value="1">Ekonomi</option>
        <option value="2">Bisnis</option>
        <option value="3">Eksekutif</option>
        <option value="4">First Class</option>
        <option value="5">VIP</option>
      </select>
    </div>
  </div> 
  <input type="hidden" name="idx" value="<?= $idedit; ?>">

  <div class="form-group row">
        <div class="offset-4 col-8">
            <?php if (empty($idedit)) { ?>
                <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
            <?php } else { ?>
                <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
            <?php } ?>
            
        </div>
    </div>
</form>