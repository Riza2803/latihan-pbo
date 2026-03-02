<?php
class Produk {
    public $nama;
    public $harga;
    public $TahunPembuatan ;

    public function statusHarga() {
        if ($this->harga > 100000) {
            return "Produk Mahal";
        } else {
            return "Produk Terjangkau";
        }
    }

    public function statusSubsidi() {
        if ($this->TahunPembuatan < 2005) {
            return "Mendapat Subsidi";
        } else {
            return "Tidak Mendapat Subsidi";
        }
    }
}  
    $produk1 = new Produk();
    $produk1->nama = htmlspecialchars($_POST['nama']);
    $produk1->harga = htmlspecialchars($_POST['harga']);
    $produk1->TahunPembuatan = htmlspecialchars($_POST['tahun']);
    echo "<h2>Data Produk</h2>";
    echo "Nama Produk : " . $produk1->nama . "<br>";
    echo "Harga : Rp " . $produk1->harga . "<br>";
    echo "Tahun Pembuatan : " . $produk1->TahunPembuatan . "<br>";
    echo "<br>";
    echo "Status Subsidi : " . $produk1->statusSubsidi() . "<br>";
    echo "Status : " . $produk1->statusHarga();

?>