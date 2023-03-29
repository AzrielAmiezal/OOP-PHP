<?php

class Produk {

    // PROPERTY / VARIABLES
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga ;


    // CONSTRUCTOR WITH PARAMETERS
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    // ACCESSOR / GETTER METHOD
   public function getLabel(){
       return "$this->penulis, $this->penerbit";
   }



}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (RM {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",17);
$produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer", 29);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);







