<?php

class Produk {

    // PROPERTY / VARIABLES
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga,
        $jmlHalaman,
        $waktuMain;


    // CONSTRUCTOR WITH PARAMETERS
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0, $waktuMain = 0){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
    }

    // ACCESSOR / GETTER METHOD
   public function getLabel(){
       return "$this->penulis, $this->penerbit";
   }

   public function getInfoProduk(){
       $str = "{$this->judul} | {$this->getLabel()} (RM {$this->harga})";
       return $str;
    }

}

class Komik extends Produk {

    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (RM {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (RM {$this->harga}) - {$this->waktuMain} Jam. ";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (RM {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",17, 100, 0);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer", 29, 0,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();







