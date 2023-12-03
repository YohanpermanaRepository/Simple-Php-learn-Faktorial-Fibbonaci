<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>

<?php
function fibonacci($y){
    $x1 = 0;
    $x2 = 1;
    $y = intval($y);

     $x4 = "$x1 $x2";
    for($i=0; $i<$y-2; $i++){
    $x3=$x1+$x2;
    $x4=$x4." $x3";
    $x1=$x2;
    $x2=$x3;}
    return $x4;}      

?>

    <form method="post" class="atas">
        <h3> MENGHITUNG BILANGAN FIBONACCI</h3>
        <h4>Masukkan angka yang ingin di hitung :</h4>
        <input type="number" name="fibonacci" required>
        <button type="submit" name="proses">PROSES</button>
    </form>
    <h4>

        <div class="bawah">
        <?php
            if(isset($_POST['proses'])){
                $y = $_POST['fibonacci'];
                    echo 'Bilangan fibonacci '.fibonacci($y);
            }
        ?>
        </div>
      
</body>
</html>

<style type="text/css">
    body{
    background-color:rgb(157, 0, 0); ;
    color: white;
    
}

.atas{
    margin-left: 290px;
    padding-top: 30px;
}
.bawah{
    margin-left: 290px;
}

</style>
