<?php
class mobil
{
  public $nama, $merk, $a;

  function getInfo()
  {
  echo "Nama mobil : " . $this->nama . "<br/>";
  echo "Merk : " . $this->merk . "<br/>";
  }

  // function getInfo($a){
  // $this->nama = $a;
  // }
}

$ferari = new Mobil();
$ferari->a = "xxx";
$ferari->merk = "aaa";
$ferari->getInfo();
