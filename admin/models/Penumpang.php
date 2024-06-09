<?php
class penumpang{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function datapenumpang(){
        $sql = "select * from penumpang";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();
        return $rs;
    }
    public function getpenumpang($id){
        $sql = "SELECT * FROM penumpang WHERE id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO penumpang (nama, gender, no_telepon, berat_bawaan)
        VALUES (?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE penumpang SET
            nama=?, gender=?, no_telepon=?, berat_bawaan=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM penumpang WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>