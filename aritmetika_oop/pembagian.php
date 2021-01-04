<?php
include 'model.php';
 ?>
<!doctype html>
 <html lang="id">
 <head>
<title>Input OOP</title>
 </head>
   <body>

<form  method="post" enctype="multipart/form-data">
     <label>Angka Pertama</label>
     <input type="number" name= '1' placeholder="angka...">

     <label>Angka Kedua</label>
     <input type="number" name= '2' placeholder="angka...">
     <input type="submit" name="submit" value="kirim">

</form>
<?php
$pembagian = $mtk->pembagian();
?>


  </body>
 </html>
