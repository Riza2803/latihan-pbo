<?php
    class manusia{
        protected $nama = "Ardi";
        var $kelas = "SI 2";

        protected function nama(){
            return "Nama : " .$this->nama;
        }

        public function tampilkan_Nama(){
            return $this->nama;
        }

        protected function Kelas(){
            return "Kelas : " . $this->kelas;
        }

        public function tampilkan_Kelas(){
            return $this->kelas;
        }
    }

    $manusia = new manusia();

    echo $manusia->tampilkan_Nama(). "<br/>";
    echo $manusia->tampilkan_Kelas();
?>