<?php

// require_once 'InfoProduk.php';
// require_once 'Produk.php';
// require_once 'Komik.php';
// require_once 'Game.php';
// require_once 'CetakInfoProduk.php';

spl_autoload_register(function ($class) {
    require_once  __DIR__ . '/Produk/' . $class . '.php';
});
