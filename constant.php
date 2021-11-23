<?php

// define('NAMA', 'Frans Sebastian');
// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR;






// class Coba {
//     const NAMA = "Frans Sebastian";
// }

// echo Coba::NAMA;



// echo __LINE__;
// echo "<br>";
// echo __FILE__;




// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();



class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;
