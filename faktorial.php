<!DOCTYPE html>
<html>
<head>
<title>Menhitung Faktorial</title>
</head>
<body>

<?php error_reporting(0);
$isi = $_POST['inputan_user'];

     function inputan_user($na){
          $nilai = 1;
          $faktor = 1;
     while($nilai <= $na){
          
     $faktor = $faktor * $nilai;
          $nilai = $nilai + 1;
     
     }return $faktor;
            }
?>

<form class="atas" method="post">
<h3>MENGHITUNG FAKTORIAL</h3>
<h4><strong>Masukkan angka yang ingin di hitung:</h4>

<input type="number" name="inputan_user" value=<?=$isi ?>>
<button type="submit" name="proses">PROSES</button>
</form>


<br>
<h5></h5>

<?php
if(isset($_POST['proses'])){
$na = $_POST['inputan_user'];
     echo "Hasil faktorial dari $na = ".inputan_user($na);
}
?>


</body>
</html>

<style type="text/css">
    body{
    background-color: rgba(0, 31, 145, 0.977);
    color: white;
}
.atas{
    margin-left: 290px;
    padding-top: 30px;
}
</style>

