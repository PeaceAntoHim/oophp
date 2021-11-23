<?php

require_once 'App/Init.php';

// $produk1 = new Komik("One Piece", "Oda Sensei", "Star japan", 50000, 100);
// $produk2 = new Game("Call of duty", "Sebastian oneil", "Activision", 400000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
