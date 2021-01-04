<?php

 class mtk{

//method1
   public function penjumlahan(){

     if(isset($_POST['submit'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 + $angka2;

  echo "$angka1 + $angka2 = $aksi";

}else{
  echo "Silahkan Mengoprasikan";
}


   }

//method2
   public function pengurangan(){

     if(isset($_POST['submit'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 - $angka2;

  echo "$angka1 - $angka2 = $aksi";

}else{
  echo "Silahkan Mengoprasikan";
}


   }


//method3
   public function perkalian(){

     if(isset($_POST['submit'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 * $angka2;

  echo "$angka1 x $angka2 = $aksi";

}else{
  echo "Silahkan Mengoprasikan";
}


   }


   //method4
   public function pembagian(){

     if(isset($_POST['submit'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 / $angka2;

  echo "$angka1 : $angka2 = $aksi";

}else{
  echo "Silahkan Mengoprasikan";
}


   }


 }

$mtk = new mtk;

//



?>
