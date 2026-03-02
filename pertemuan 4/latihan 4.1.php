<?php

    function formatRupiah($angka) {
        return "Rp " . number_format($angka, 0,',','.');
    }

    Class Belanja {
        public $namaPembeli;
        public $namaBarang;
        public $hargaBarang;
        public $jumlahBeli;
        public $persenDiskon;

    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDiskon() {
        $subtotal = $this->hitungSubtotal($persenDiskon);
        $diskon = ($this->persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
    }

$dataPembeli = [
    'namaPembeli' => 'Andi',
    'namaBarang' => 'Baju',
    'hargaBarang' => 100000,
    'jumlahBeli' => 2,

    ];

    [
    'namaPembeli' => 'Budi',
    'namaBarang' => 'Celana',
    'hargaBarang' => 150000,
    'jumlahBeli' => 1,

    ];

    [
    'namaPembeli' => 'Citra',
    'namaBarang' => 'Sepatu',
    'hargaBarang' => 200000,
    'jumlahBeli' => 1,

    ];

$belanja = new Belanja();
$belanja->namaPembeli = $dataPembeli['namaPembeli'];
$belanja->namaBarang = $dataPembeli['namaBarang'];
$belanja->hargaBarang = $dataPembeli['hargaBarang'];
$belanja->jumlahBeli = $dataPembeli['jumlahBeli'];

echo "<h2> STRUK BELANJA WARUNG BERKAH SEMBAKO </h2>";
echo "Nama Pembeli: " . $belanja->namaPembeli . "<br>";
echo "Nama Barang: " . $belanja->namaBarang . "<br>";
echo "subtotal: " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
echo "Total Diskon 10%: " . formatRupiah($belanja->hitungTotalDiskon($belanja->persenDiskon)) . "<br>";
?>