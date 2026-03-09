<?php
    $data = [
        ["Nama"=>"Agus","Nilai"=>80],
        ["Nama"=>"Asep","Nilai"=>75],
        ["Nama"=>"Firman","Nilai"=>90],
    ];

    echo "<table border ='1'>";
    echo "<tr><th>Nama<th/><th>Nilai<th/><tr/>";

    foreach ($data as $d) {
        echo "<tr>";
        echo "<td>".$d ["Nama"]."<td/>";
        echo "<td>".$d ["Nilai"]."<td/>";
        echo "<tr/>";
    }
    
    echo "</table>";
?>