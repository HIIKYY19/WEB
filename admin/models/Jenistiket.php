<?php
class jenistiket{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function datajenistiket(){
        $sql = "select * from jenis_tiket";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();
        return $rs;
    }
    public function getjenistiket($idjenis){
        $sql = "SELECT * FROM jenis_tiket
        where id=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$idjenis]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO jenis_tiket(nama,max_kapasitas_bawaan)
        Values(?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE jenis_tiket SET
            nama=?, max_kapasitas_bawaan=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM jenis_tiket WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>