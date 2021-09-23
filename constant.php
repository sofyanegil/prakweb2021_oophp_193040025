<?php
// define hanya bisa dideklarasikan di global scope
// define("NAMA", "Sofyan Egi");
// echo NAMA;

// echo '<br>';
// // const bisa dideklarasikan di dalam class
// const UMUR = 20;
// echo UMUR;

// class Coba
// {
//   const NAMA = "Sofyan Egi";
// }

// echo "<h1>" . COBA::NAMA . "</h1>";


// // Magic Constant
// echo __FILE__;

// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;
