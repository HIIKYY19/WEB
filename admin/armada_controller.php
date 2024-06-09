<?php

include_once 'koneksi.php';
include_once 'models/Armada.php';

$idarmada = $_POST ['idarmada'];
$jenis_armada = $_POST ['jenis_armada'];
$nama_armada = $_POST ['nama_armada'];
$kapasitas = $_POST ['kapasitas'];

$data = [
    $idarmada, $jenis_armada,
    $nama_armada, $kapasitas
];

$model = new Jenis_Armada();
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
        header('Location:index.php?url=armada');
        break;
}
header('Location:index.php?url=armada');
?>