<?php
include_once 'koneksi.php';
include_once 'models/Penumpang.php';

$nama = $_POST ['nama'];
$gender = $_POST ['gender'];
$no_telepon = $_POST ['no_telepon'];
$berat_bawaan = $_POST ['berat_bawaan'];
$data = [
    $nama, $gender, $no_telepon,
    $berat_bawaan
];

$model = new penumpang();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case'simpan': $model->simpan($data); break;
    case 'ubah' : $data[] = $_POST['idx']; $model->ubah($data); break;
    case 'hapus' : unset($data);
    $data[] = $_POST['idx'];
    $model->hapus($data);break;
    default:
    header('Location:index.php?url=penumpang');
    break;
}
header('Location:index.php?url=penumpang');
?>