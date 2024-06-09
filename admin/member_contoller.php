<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Member.php';

$email = $_POST['email'];
$password = $_POST['password'];
$data = [
    $email, $password
];

$obj = new Member();
$rs = $obj->cekLogin($data);

if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('location:index.php');
}else{
    header('location:login.php');
}

?>