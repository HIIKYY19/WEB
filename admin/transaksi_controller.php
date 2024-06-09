<?php
include_once 'koneksi.php';
include_once 'models/Transaksi.php';


$total_tiket = $_POST ['total_tiket'];
$totalharga = $_POST ['totalharga'];
$penumpang_id = $_POST ['penumpang_id'];
$tiket_id = $_POST['tiket_id'];
$tanggal = $_POST ['tanggal'];
$data = [
    $total_tiket, $totalharga, 
    $penumpang_id,$tiket_id,$tanggal
];

$model = new Transaksi();
$tombol = $_REQUEST['proses'];
switch($tombol){
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
    break;
    
    default:
    header('Location:index.php?url=transaksi');
    break;
}
header('Location:index.php?url=transaksi');



?>