<?php
if ($nilai > 70) {
    echo "Selamat Anda Lulus";
}
elseif ($nilai < 70) {
    echo "Maaf Anda Tidak Lulus";
}
elseif ($nilai < 0) {
    echo "Nilai Harus Lebih Dari 0";
}
elseif ($nilai > 100) {
    echo "Nilai Harus Kurang Dari 100";
}


?>