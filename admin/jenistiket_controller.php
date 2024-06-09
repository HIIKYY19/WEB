<?php
include_once 'koneksi.php';
include_once 'models/jenistiket.php';

$nama = $_POST ['nama'];
$max_kapasitas_bawaan = $_POST ['max_kapasitas_bawaan'];
$data = [
    $nama, $max_kapasitas_bawaan
];

$model = new jenistiket();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case'simpan': $model->simpan($data); break;
    case 'ubah' : $data[] = $_POST['idx']; $model->ubah($data); break;
    case 'hapus' : unset($data);
    $data[] = $_POST['idx'];
    $model->hapus($data);break;
    default:
    header('Location:index.php?url=jenistiket');
    break;
}
header('Location:index.php?url=jenistiket');
?>