<?php

// 1 - static keyword without instantiation
class ContohStatic{
    public static $angka = 1;

    public static function hello(){
        return "hello. " . self::$angka++. " kali.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hello();
echo "<hr>";
echo ContohStatic::hello();


// 2 - static keyword with instantiation
class Contoh{

    public static $angka  = 1;

    public function hello(){
        return "Hello " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();