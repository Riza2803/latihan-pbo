<?php
    class manusia{
        public $nama;
        public $umur;
        public $gender;
    

    function bicara(){
        echo "Selamat Datang";
    }    

    function getInfo(){
        echo "Nama=".$this->nama."<br/>";
        echo "Umur=".$this->umur."<br/>";
        echo "Gender=".$this->gender."<br/>";
    }
    }
    
    class ayah extends manusia{
        function pekerjaan(){
            echo "Pegawai Negeri Sipil <br/>";
            echo "<br/>";
        }
    }

    class ibu extends manusia{
        function pekerjaan(){
            echo "Ibu Rumah Tangga <br/>";
            echo "<br/>";
        }
    }

    class anak extends manusia{
        function pekerjaan(){
            echo "Pelajar <br/>";
            echo "<br/>";
        }
    }

    $objectAyah = new ayah();
    $objectAyah -> nama="Budi";
    $objectAyah -> gender="Laki laki";
    $objectAyah -> umur="45";
    echo "<b> Info Ayah </b> <br/>";
    $objectAyah -> getInfo();
    $objectAyah -> pekerjaan();

    $objectIbu = new ibu();
    $objectIbu -> nama="Siti";
    $objectIbu -> gender="Perempuan";
    $objectIbu -> umur="35";
    echo "<b> Info Ibu </b><br/>";
    $objectIbu -> getInfo();
    $objectIbu -> pekerjaan();

    $objectAnak = new anak();
    $objectAnak -> nama="Asep";
    $objectAnak -> gender="Laki laki";
    $objectAnak -> umur="18";
    echo "<b> Info Anak </b><br/>";
    $objectAnak -> getInfo();
    $objectAnak -> pekerjaan();
?>