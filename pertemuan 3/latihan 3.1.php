<?php
    class Kendaraan {
        public string $merk = "Toyota";
        public string $warna = "Merah";
        public int $tahun = 2004;
        public int $jumlahRoda = 4;
        public string $harga = "100000000";
        public string $bahanBakar = "Pertalite";

        public function statusHarga() {
            if ($this->harga > 100000000) {
                return "Mahal";
            } else {
                return "Murah";
            }
        }

        public function statusSubsidi() {
            if ($this->tahun < 2004 ) {
                return "Mendapat Subsidi";
            } else {
                return "Tidak Mendapat Subsidi";
            }

        }
    }
    //Instansiasi objek Kendaraan
    $objekKendaraan = new Kendaraan();
    echo "Merk : " . $objekKendaraan->merk . "<br>";
    echo "Tahun : " . $objekKendaraan->tahun . "<br>";
    echo "Jumlah Roda : " . $objekKendaraan->jumlahRoda . "<br>";
    echo "Harga : " . $objekKendaraan->harga . "<br>";
    echo "Bahan Bakar : " . $objekKendaraan->bahanBakar . "<br>";
    echo "Status Harga : " . $objekKendaraan->statusHarga() . "<br>";
    echo "Status Subsidi : " . $objekKendaraan->statusSubsidi() . "<br>";
    echo "<br>";

    //Instansiasi objek Kendaraan1
    $objekKendaraan1 = new Kendaraan;
    $objekKendaraan1 ->harga=300000;
    $objekKendaraan1 ->tahunPembuatan = 2007;
    $objekKendaraan1 ->merk = "Yamaha";
   
    echo "Merk : ".$objekKendaraan1->merk."<br>";
    echo "Tahun Pembuatan : ".$objekKendaraan1->tahunPembuatan."<br>";
    echo "Harga : ".$objekKendaraan1->harga."<br>";
    echo "Status Harga : ".$objekKendaraan1->statusHarga()."<br>";
    echo "<br>";
    
    //Instansiasi objek Kendaraan2
    $objekKendaraan2 = new Kendaraan;
    $objekKendaraan2 ->harga=10000000;
    $objekKendaraan2 ->tahunPembuatan = 2016;
    $objekKendaraan2 ->merk = "Toyota";
   
    echo "Merk : ".$objekKendaraan2->merk."<br>";
    echo "Tahun Pembuatan : ".$objekKendaraan2->tahunPembuatan."<br>";
    echo "Harga : ".$objekKendaraan2->harga."<br>";
    echo "Status Harga : ".$objekKendaraan2->statusHarga()."<br>";
   
?>