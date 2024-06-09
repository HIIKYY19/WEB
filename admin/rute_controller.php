<?php

include_once 'koneksi.php';
include_once 'models/Rute.php';

$kode = $_POST ['kode'];
$kota_asal = $_POST ['kota_asal'];
$kota_tujuan = $_POST ['kota_tujuan'];
$jarak = $_POST ['jarak'];

$data = [
    $kode, $kota_asal, $kota_tujuan, $jarak
];

$model = new Rute();
$tombol = $_REQUEST ['proses'];
switch($tombol){
    case 'simpan': $model->simpan($data); break;
    case 'ubah' : 
        $data[] = $_POST['idx']; 
        $model->ubah($data); 
        break;

    case 'hapus': 
    unset($data);
    $data[] = $_POST['idx'];
    $model->hapus($data);
    break;
    
    default:
    header('Location:index.php?url=rute');
    break;
}
header('Location:index.php?url=rute');
?>