<?php

include_once 'koneksi.php';
include_once 'models/Tiket.php';

$harga = $_POST ['harga'];
$jadwal_id = $_POST ['jadwal_id'];
$jenis_tiket_id = $_POST ['jenis_tiket_id'];
$rute_id = $_POST ['rute_id'];
$armada_id = $_POST ['armada_id'];

$data = [
    $harga, $jadwal_id, $jenis_tiket_id, $rute_id, $armada_id
];

$model = new Tiket();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah' : 
            $data[] = $_POST['idx']; 
            $model->ubah($data); 
            break;
    case 'hapus': 
            unset($data);
            $data[] = $_POST['idx'];
            $model->hapus($data);
    default;
        header('Location:index.php?url=tiket');
        break;
}
header('Location:index.php?url=tiket');
?>