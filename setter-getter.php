<?php

class Produk {

    // PROPERTY / VARIABLES
    private $judul , $penulis , $penerbit, $harga, $diskaun = 0;

    // CONSTRUCTOR WITH PARAMETERS
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    // MUTATOR / ACCESSOR (Setter / Getter)
    public function setJudul($judul){
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskaun / 100);
    }
    public function setDiskaun($diskaun){
        $this->diskaun = $diskaun;
    }
    public function getDiskaun()
    {
        return $this->diskaun;
    }

   public function getLabel(){
       return "$this->penulis, $this->penerbit";
   }

   public function getInfoProduk(){
       $str = "{$this->judul} | {$this->getLabel()} (RM {$this->harga})";
       return $str;
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
echo "<hr>";

$produk1->setPenulis("Azriel Amiezal");
echo $produk1->getPenulis();








