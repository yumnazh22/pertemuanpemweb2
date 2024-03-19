<?php 
// Tangkep Data Input
$costumer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

if($produk === "TV") {
    $harga_produk = 4200000;
} elseif($produk === "Kulkas") {
    $harga_produk = 3100000;
} elseif($produk === "Mesin Cuci") {
    $harga_produk = 3800000;
}

$total_harga_produk = $jumlah * $harga_produk;

// Tampilin Hasil Data
echo "<h3>Hasil Pembelian:</h3>";
echo "<p>Nama Costumer : " . $costumer . "</p>";
echo "<p>Produk Pilihan : " . $produk  . "</p>";
echo "<p>Jumlah Beli : " . $jumlah  . "</p>";
echo "<p>Total Harga Produk: Rp. " . number_format($total_harga_produk, 0, ',', '.') . "</p>";

















?>