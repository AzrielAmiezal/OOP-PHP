<?php

class Produk {

    // PROPERTY / VARIABLES
    public $judul ,
        $penulis ,
        $penerbit;

    protected $diskaun = 0;
    private $harga;


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

   public function getInfoProduk(){
       $str = "{$this->judul} | {$this->getLabel()} (RM {$this->harga})";
       return $str;
    }

   public function getHarga(){
        return $this->harga - ($this->harga * $this->diskaun / 100);
   }


}

class Komik extends Produk {

    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis , $penerbit , $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {

    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : ". parent::getInfoProduk() . " ~ {$this->waktuMain} Jam. ";
        return $str;
    }

    public function setDiskaun($diskaun){
        $this->diskaun = $diskaun;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (RM {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",17,100);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer", 29,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskaun(5);
echo $produk2->getHarga();







