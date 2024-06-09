<?php

class Jenis_Armada{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataArmada(){
        $sql = "SELECT * FROM armada";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getDataArmada($idarmada){
        $sql = "SELECT * FROM armada
        where armada.idarmada=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$idarmada]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO armada(idarmada,jenis_armada,nama_armada,kapasitas)
        Values(?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE armada SET
            jenis_armada=?, nama_armada=?, kapasitas=? WHERE idarmada=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM armada WHERE idarmada = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
        
}

?>