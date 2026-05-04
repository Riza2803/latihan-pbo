<?php
    interface Hewan{
        public function makan();
        public function bergerak();
        public function beranak();
    }

    class Burung Implements Hewan{
        public function makan(){
            return "Burung makan biji bijian <br/>";
        }

        public function bergerak(){
            return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";
        }

        public function beranak(){
            return "Burung beranak dengan bertelur<br/>";
        }
    }

    class kambing implements Hewan{
        public function makan(){
            return "Kambing makan rumput <br/>";
        }

        public function bergerak(){
            return "Kambing bergerak dengan berjalan dan berlari<br/>";
        }

        public function beranak(){
            return "Kambing beranak dengan melahirkan<br/>";
        }
    }

    $Burung = new Burung();
    $Kambing = new Kambing();

    echo "<b>Perilaku Burung :</b><br/>";
    echo $Burung->makan();
    echo $Burung->bergerak();
    echo $Burung->beranak();

    echo "<br/>";
    echo "<b>Perilaku Kambing :</b><br/>";
    echo $Kambing->makan();
    echo $Kambing->bergerak();
    echo $Kambing->beranak();
?>