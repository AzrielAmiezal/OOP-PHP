<?php
// 1 - using define (cannot use inside the class)
//define('NAMA', 'Azriel Amiezal');
//
//echo NAMA;
//
//echo "<br>";

// 2 - using const (can be use inside class)
//const UMUR = 24;
//echo UMUR;


//class Coba{
//    const NAMA = 'Azriel Amiezal';
//}
//
//echo Coba::NAMA;


//echo __FILE__;

//function coba(){
//    return __FUNCTION__;
//}
//
//echo coba();

class Coba{
    public $class = __CLASS__;
}

$obj = new Coba();
echo $obj->class;