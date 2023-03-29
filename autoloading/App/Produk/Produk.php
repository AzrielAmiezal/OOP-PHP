<?php

abstract class Produk {

    // PROPERTY / VARIABLES
    protected $judul , $penulis , $penerbit, $harga, $diskaun = 0;

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

    abstract public function getInfo();

}