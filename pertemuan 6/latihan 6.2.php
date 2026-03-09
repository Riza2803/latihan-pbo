<?php
class perulangan {
    public function loop(){
    $array = array ('Subang','Bandung','Jakarta','Bogor');
        foreach ($array as $key) {
            echo $key . "<br/>";
        }
    }
}

$perulangan1 = new perulangan();
echo "Nama nama kota jawa barat:"."<br/>";
echo $perulangan1 -> loop() . "<br/>";
?>