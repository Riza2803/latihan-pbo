<?php
 function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0,',','.');
 }

 class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
    public $persenDiskon;

    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungDiskon($subtotal) {
        if ($subtotal > 100000) {
            return $subtotal * 0.1;
        }
        return 0;
    }

    public function hitungTotal() {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungDiskon($subtotal);
        return $subtotal - $diskon;
    }
 }

$dataPembeli = [
    [
        'nama' => 'Andi',
        'Barang' => 'Baju',
        'Harga' => 100000,
        'jumlahBeli' => 2
    ],
    [
        'nama' => 'Budi',
        'Barang' => 'Celana',
        'Harga' => 150000,
        'jumlahBeli' => 1
    ]
];
 
echo "<h2>Transaksi 1 </h2>";

$errors1 = [];

$nama = $dataPembeli[0]['nama'];
$barang = $dataPembeli[0]['Barang'];
$harga = $dataPembeli[0]['Harga'];
$jumlahBeli = $dataPembeli[0]['jumlahBeli'];

if (empty($nama)) {
    $errors1[] = "Nama pembeli tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors1[] = "Harga barang harus lebih besar dari 0.";
}

if ($jumlahBeli <= 0) {
    $errors1[] = "Jumlah beli harus lebih besar dari 0.";
}

if (!empty($errors1)) {
    foreach ($errors1 as $error) {
        echo $error . "<br>";
    }
} else {
    $belanja1 = new Belanja();
    $belanja1->namaPembeli = $nama;
    $belanja1->namaBarang = $barang;
    $belanja1->hargaBarang = $harga;
    $belanja1->jumlahBeli = $jumlahBeli;

    $subtotal = $belanja1->hitungSUbtotal();
    $diskon = $belanja1->hitungDiskon($subtotal);
    $total = $belanja1->hitungTotal();

    echo "Pembeli : $belanja1->namaPembeli <br>";
    echo "Barang : $belanja1->namaBarang <br>";
    echo "Subtotal : " . formatRupiah($subtotal) . "<br>";
    echo "Diskon : " . formatRupiah($diskon) . "<br>";
    echo "<b> Total Bayar : " . formatRupiah($total) . "</b><br><br>";
}

echo "<h2>Transaksi 2 </h2>";

$errors2 = [];

$nama = $dataPembeli[1]['nama'];
$barang = $dataPembeli[1]['Barang'];
$harga = $dataPembeli[1]['Harga'];
$jumlahBeli = $dataPembeli[1]['jumlahBeli'];

if (empty($nama)) {
    $errors2[] = "Nama pembeli tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors2[] = "Harga barang harus lebih besar dari 0.";
}

if ($jumlahBeli <= 0) {
    $errors2[] = "Jumlah beli harus lebih besar dari 0.";
}

if (!empty($errors2)) {
    foreach ($errors2 as $error) {
        echo $error . "<br>";
    }
} else {
    $belanja2 = new Belanja();
    $belanja2->namaPembeli = $nama;
    $belanja2->namaBarang = $barang;
    $belanja2->hargaBarang = $harga;
    $belanja2->jumlahBeli = $jumlahBeli;

    $subtotal = $belanja2->hitungSubtotal();
    $diskon = $belanja2->hitungDiskon($subtotal);
    $total = $belanja2->hitungTotal();

    echo "Pembeli : $belanja2->namaPembeli <br>";
    echo "Barang : $belanja2->namaBarang <br>";
    echo "Subtotal : " . formatRupiah($subtotal) . "<br>";
    echo "Diskon : " . formatRupiah($diskon) . "<br>";
    echo "<b> Total Bayar : " . formatRupiah($total) . "</b><br><br>";
}
?>