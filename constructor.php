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

    public function __construct($namaProduk = "namaProduk", $penjual = "penjual", $deskripsi = "deskripsi", $harga = 0)
    {
        $this->namaProduk;
        $this->penjual;
        $this->deskripsi;
        $this->harga;
    }




    public function getLabel()
    {
        return "$this->penjual, $this->deskripsi";
    }
}


class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->namaProduk} | {$produk->getlabel()} (Rp. {$produk->harga})";
    }
}








// $produk1 = new Produk();
// $produk1->namaProduk = "PRU Cerah";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->namaProduk = "mTF";
// var_dump($produk2);


$produk1 = new Produk("PRU Cerah", "Stanza Angkarian", "Merupakan produk terbaik kami yang dapat anda beli sebagai tunjagan hidup anda", 9000000);
$produk2 = new Produk("PRU Sehat", "Henny Nilam SariWati Liecardo", "Merupakan produk yang ekonomis dari MRT group yang wajib anda beli karena dapat menunjang kesehatan anda", 400000);
$produk3 = new Produk("PRU Remaja", "Stanza Angkarian", "Ini adalah produk baru kami yang harus anda coba karena dapat menunjang biaya anak anda", 600000);

echo "PRU Cerah : " . $produk1->getLabel();
echo "<br>";
echo "PRU Sehat : " . $produk2->getLabel();
echo "<br>";
echo "PRU Remaja : " . $produk3->getLabel();
