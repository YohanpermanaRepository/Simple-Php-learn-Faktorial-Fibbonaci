<html>
    <head>
        <title>yohan permana</title>

    </head>
    <style type="text/css">
    
body{
    background: rgb(250, 250, 250);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-left: 50px;
    padding-top: 20px;
}

.judul{
    background: rgb(39, 179, 39);
    width: 500px;
    text-align: center;
    text-decoration: solid;
    color: white;
    border-radius: 5px;

}
.inputan{
    background: black;
    width: 500px;
    padding-top: 5px;
    padding-bottom: 40px;
    font-size: 14px;
}

.inputan ul li p {
    display:inline-block;
    background: rgb(33, 148, 33);
    padding-right: 50px;
    width: 180px;
    height: 20px;
    text-align: justify;
    padding-left: 5px;
    color: white;
}
.inputan ul li {
    list-style: none;
    
}
.inputan input{
    color: black;

}
.proses{

    position: absolute;
    left: 90px;
    background: rgb(255, 255, 255);
    border-radius: 5px;
    cursor: pointer;
    
}

.cetak{
    background-color: rgb(102, 102, 102);
    width: 450px;
    color: white;
    text-align: justify;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 50px;
}
</style>

        <body>
            <div class="judul">
            <p>MENGHITUNG MEAN MODUS MAX DAN MIN</p>
            </div>

            <form method="get" class="inputan">
            <ul>
                <li><p>Masukkan angka pertama</p>
                <input name="x1" type="number" required="">
                <li><p>Masukkan angka kedua</p>
                <input name="x2" type="number" required="">
                <li><p>Masukkan angka ketiga</p>
                <input name="x3" type="number" required="">
                <li><p>Masukkan angka keempat</p>
                <input name="x4" type="number" required="">
                <li><p>Masukkan angka kelima</p>
                <input name="x5" type="number" required="">
            </ul>

            <input class="proses" type="submit" value="PROSES"/>
            </form>

    </body>
</html>

<div class="cetak">

<?php
echo "<start> "; if(!isset($_GET['x1']))
die();

$y= array(
$_GET["x1"],
$_GET["x2"],
$_GET["x3"],
$_GET["x4"],
$_GET["x5"],
);

function prosesing($ar1, $out ){ if(!is_array($ar1)){
    return false;
}else{
    switch($out){ case 'prosesmean':
        $ban = count($ar1);
        $jum = array_sum($ar1);$jk = $jum / $ban; 
        break;
    case 'prosesmodus':
        $s = array_count_values($ar1); arsort($s);
        foreach($s as $k => $s){$jk = $k; break;} 
        break;
    }
    return $jk;
}
}
echo "<h4>Nilai Mean/rata-rata : ".prosesing($y, 'prosesmean')."</h4>";
echo "<h4>Nilai Modus/yang sering muncul  : ".prosesing($y, 'prosesmodus')."</h4>";
echo "<h4>Nilai Min/nilai terkecil  : ".min($y)."</h4>";
echo "<h4>Nilai Max/nilai terbesar : ".max($y)."</h4>";
?>
</div>




