<?php

abstract class Produk
{
    protected  $judul,
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
    abstract public function getInfo();
}
