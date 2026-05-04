<?php
    class manusia{
        private $nama = "Ardi";
        private $kelas = "SI 1";

        private function m_nama(){
            return $this->nama;
        }

        public function tampilkan_Nama(){
            return $this->m_nama;
        }

        function tampilkan_Kelas(){
            return $this->kelas;
        }
    }

    $manusia = new manusia();

    echo "Nama = ". $manusia->tampilkan_Nama() . "<br/>";
    echo "Kelas =" . $manusia->tampilkan_Kelas();
    ?>