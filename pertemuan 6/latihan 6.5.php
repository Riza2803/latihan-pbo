<?php
 function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0,',','.');
 }

 class belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
    public $persenDiskon;
    public $member;

    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function Diskon($hitungSubtotal) {
        $diskon = 0 ;
        if ($this->member == true ){
            if($hitungSubtotal > 500000){
                $diskon = 50000;
            }
            elseif ($hitungSubtotal > 100000)
                $diskon = 15000;
            }
        elseif ($this->member == false){
            if ($hitungSubtotal > 100000){
                $diskon = 5000;
            }
        }
            return $diskon;
    }

    public function total(){
        $hitungSubtotal = $this -> hitungSubtotal();
        $diskon = $this -> diskon($hitungSubtotal);

        return $hitungSubtotal - $diskon ;
    }

 }

$dataPembeli = [
    [
    "nama"=>"Budi",
    "barang"=>"Baju Polo",
    "harga"=>150000,
    "jumlah"=>1,
    "member"=>true,
    ],

    [
    "nama"=>"Asep",
    "barang"=>"Celana Cargo",
    "harga"=>120000,
    "jumlah"=>1,
    "member"=>false,
    ]
];

echo "<table border='1' cell padding='6'>";

echo "<tr>
<th>No</th>
<th>Nama</th>
<th>Member</th>
<th>Barang</th>
<th>Subtotal</th>
<th>Diskon</th>
<th>Total</th>
</tr>";
   
$no = 1;

foreach ($dataPembeli as $d){

    $belanja1 = new belanja();

    $belanja1->namaPembeli=$d["nama"];
    $belanja1->namaBarang=$d["barang"];
    $belanja1->hargaBarang=$d["harga"];
    $belanja1->jumlahBeli=$d["jumlah"];
    $belanja1->member=$d["member"];

    $hitungSubtotal=$belanja1->hitungSubtotal();
    $diskon=$belanja1->diskon($hitungSubtotal);
    $total=$belanja1->total();

    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$belanja1->namaPembeli."</td>";
    echo "<td>".($belanja1->member ? "Ya" : "Tidak")."</td>";
    echo "<td>".$belanja1->namaBarang."</td>";
    echo "<td>".formatRupiah($hitungSubtotal). "</td>";
    echo "<td>".formatRupiah($diskon). "</td>";
    echo "<td>".formatRupiah($total). "</td>";
    echo "</tr>";
    $no++;
}
    echo "</table>";
?>