<?php


class Produk
{
    private  $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;




    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter dan Getter


    // Setter judul
    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("judul harus string");
        }
        $this->judul = $judul;
    }
    // Getter judul
    public function getJudul()
    {
        return $this->judul;
    }
    // Get Label
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
    // Get harga
    public function getHarga()
    {
        return $this->harga - ($this->harga  * $this->diskon / 100);
    }

    // Set harga
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    // set penulis

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    //  get penulis
    public function getPenulis()
    {
        return $this->penulis;
    }
    // set Penerbit 
    public function setPenerbit()
    {
        return $this->penerbit;
    }
    // get Penerbit

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    // Set diskon
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    // get diskon
    public function getDiskon()
    {
        return $this->diskon;
    }

    //get infoProduk 
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {


        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }


    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam. 
        ";
        return $str;
    }
}



// class CetakInfoProduk
// {
//     public function cetak(Produk $produk)
//     {
//         $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
//         return $str;
//     }
// }


$produk1 = new Komik("One Piece", "Oda Sensei", "Star japan", 50000, 100);
$produk2 = new Game("Call of duty", "Sebastian oneil", "Activision", 400000, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


echo $produk1->getJudul();
