<?php

class Produk
{
  //Property
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jumlahHalaman,
    $waktuMain,
    $tipe;

  // Constructor Method
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jumlahHalaman = $jumlahHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul}| {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jumlahHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
    return $str;
  }
}

// Instansiasi objek dengan konstruktor
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
