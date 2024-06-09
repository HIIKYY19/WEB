<?php
class Transaksi{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi=$dbh;
    }

    public function DataTransaksi(){
        $sql = "SELECT * FROM transaksi;";
         $ps = $this->koneksi->prepare($sql);
         $ps->execute();
         $rs = $ps->fetchAll();
         return $rs;
     }

     public function getTransaksi($id_transaksi){
        $sql = "SELECT * FROM transaksi WHERE id_transaksi = ?;";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id_transaksi]);
        $rs = $ps->fetch();
        return $rs;
     }

     public function simpan($data){
        $sql = "INSERT INTO transaksi (total_tiket, totalharga, penumpang_id, tiket_id, tanggal)
        VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
     }

     public function ubah($data){
         $sql = "UPDATE transaksi SET 
         total_tiket=?, totalharga=?, penumpang_id=?, tiket_id=?, tanggal=? WHERE transaksi.id_transaksi=?";
         $ps = $this->koneksi->prepare($sql);
         $ps->execute($data);
     }

     public function hapus($idx){
        $sql = "DELETE FROM transaksi WHERE id_transaksi=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($idx);
     }

    }
?>
