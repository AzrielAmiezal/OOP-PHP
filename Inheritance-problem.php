<?php

class Produk {

    // PROPERTY / VARIABLES
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $type;


    // CONSTRUCTOR WITH PARAMETERS
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      $this->type = $type;
    }

    // ACCESSOR / GETTER METHOD
   public function getLabel(){
       return "$this->penulis, $this->penerbit";
   }

   public function getInfoLengkap(){
       // Komik : Naruto | Masashi Kishimoto, Shonen Jump (RM 17) - 100 Halaman.
       $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (RM {$this->harga})";
       if($this->type == "Komik"){
           $str .= " - {$this->jmlHalaman} Halaman.";
       }else if ($this->type == "Game"){
           $str .= " - {$this->waktuMain} Jam.";
       }

       return $str;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (RM {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",17, 100, 0, "Komik");
$produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer", 29, 0,50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();







