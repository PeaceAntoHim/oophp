<?php


// Jualan produk prudential
// Pru cerah
// pru sehat

class Produk
{
    public  $namaProduk = "PRU",
        $penjual = "Henny",
        $deskripsi = "merupakan produk bagus milik prudent untuk menciptakan indonesia cerah",
        $harga = 0;

    public function __construct()
    {
        echo "hello world";
    }




    public function getLabel()
    {
        return "$this->penjual, $this->deskripsi";
    }
}

// $produk1 = new Produk();
// $produk1->namaProduk = "PRU Cerah";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->namaProduk = "mTF";
// var_dump($produk2);


$produk3 = new Produk();
$produk3->namaProduk = "PRU Cerah";
$produk3->penjual = "Stanza Angkarian";
$produk3->deskripsi = "Merupakan produk terbaik dari mrt group untuk indonsia lebih cerah dan maju";
$produk3->harga = 9500000;

$produk4 = new Produk();
$produk4->namaProduk = "PRU Sehat";
$produk4->penjual = "Henny Nilam Sariwati Liecardo";
$produk4->deskripsi = "Merupakan salah satu produk kami yang berfokus pada pelayanan kesehatan";
$produk4->harga = 700000;

echo "PRU Cerah : " . $produk3->getLabel();
echo "<br>";
echo "PRU Sehat : " . $produk4->getLabel();
