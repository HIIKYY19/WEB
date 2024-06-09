<?php

class Tiket{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataTiket(){
        $sql = "SELECT * FROM tiket";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getDataTiket($id_tiket){
        $sql = "SELECT * FROM tiket where id_tiket=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id_tiket]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO tiket(harga, jadwal_id, jenis_tiket_id, rute_id, armada_id)
        Values(?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE tiket SET
            harga=?,jadwal_id=?,jenis_tiket_id=? ,rute_id=?, armada_id=? WHERE id_tiket=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM tiket WHERE id_tiket = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
        
}

?>