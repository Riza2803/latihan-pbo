<?php
    class manusia{
        public $nama="Ardi";
        var $kelas="SI 1";

        function tampilkan_Nama(){
            return $this->nama;
        }

        public function tampilkan_Kelas(){
            return $this->kelas;
        }

    }

    $manusia = new manusia();

    echo "Nama : ".$manusia->tampilkan_Nama()."<br/>";
    echo "Kelas :".$manusia->tampilkan_Kelas()."<br/>";
?>