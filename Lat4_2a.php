<?php
class mahasiswa{
   public $nama, $nim;

   function __construct($a, $b){
   $this->nama = $a;
   $this->nim = $b;
   echo " Kelas telah dibuat<br/><br/>";
   }

   // function __construct($c, $d){
   //    $this->a = $c;
   //    $this->b = $d;
   // }

   function cetak(){
   echo $this->nama . "<br/>" . $this->nim . "<br/><br/>";
   }

   function __destruct(){
   echo "Kelas telah dihancurkan";
   }
}
