<?php

class Rute{
    private $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataRute(){
    $sql = "SELECT * FROM rute";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
    }

    public function getDatarute($idrute){
        $sql = "SELECT * FROM rute
        where idrute=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$idrute]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO rute (kode, kota_asal, kota_tujuan, jarak)
                VALUES (?,?,?,?)";
                $ps = $this->koneksi->prepare($sql);
                $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE rute SET
            kode=?, kota_asal=?, kota_tujuan=?, jarak=? WHERE idrute=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM rute WHERE idrute = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>