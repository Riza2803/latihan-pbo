<?php
// Dibawah ini adalah class belanja
class Belanja {
     // Didalam class belanja ada variable dan value
    public string $namapembeli="Farid Wijawa";
    public string $namabarang="Sabun"; // Ini ada instance, variable/value yang ada didalam class tapi ada diluar method
    public int $hargabarang=7000;
    public int $jumlahbarang=2;
    public float $totalbayar=14000;
    public float $diskon=0.05;

    public static float $pajak=0.02; // Ini ada static yaitu yang value nya tidak bisa diubah/tetap

    public function __construct ($namapembeli) {
    $this-> namapembeli = $namapembeli;  // Ini adalah local, yaitu variable/value yang ada di dalam method
    }
    
    public function hitungtsubtotal (): float { // Ini adalah aritmatika
        $subtotal = $this->hargabarang * $this->jumlahbarang;
        return $subtotal;
    }

    public function hitungdiskon (): float {
        $diskon = $this->totalbayar * $this->diskon;
        return $diskon;
    }

    public function totalseluruh (): float {
        $totalseluruh = $this->totalbayar - $this->hitungdiskon() + (self::$pajak * $this->totalbayar);
        return $totalseluruh;}

     public function tampilRincian ($namapembeli): void{
        echo "Nama Pembeli : " . $this->namapembeli . "<br>";
        echo "Nama Barang : " . $this->namabarang . "<br>";
        echo "Harga Barang : " . $this->hargabarang . "<br>";
        echo "Jumlah Barang : " . $this->jumlahbarang . "<br>";
        echo "Subtotal : " . $this->hitungtsubtotal() . "<br>";
        echo "Diskon : " . $this->hitungdiskon() . "<br>";
        echo "Total Bayar : " . $this->totalseluruh() . "<br>";
    }
}

    $belanja1 = new belanja(namapembeli: "Farid Wijawa");
    $belanja1->tampilRincian(namapembeli: $belanja1->namapembeli);
    $belanja1 = new belanja(namabarang: "Sabun");
    $belanja1->tampilRincian(namabarang: $belanja1->namabarang);
    $belanja1 = new belanja(hargabarang: $belanja1->hargabarang);
    $belanja1->tampilRincian(hargabarang: $belanja1->hargabarang);
    $belanja1 = new belanja(jumlahbarang: $belanja1->jumlahbarang);
    $belanja1->tampilRincian(jumlahbarang: $belanja1->jumlahbarang);





?>