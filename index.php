<!DOCTYPE html>
<html>
<head>
    <title>yohan</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="judul">
    <h2>PROGRAM KONVERSI SUHU, PERHITUNGAN FAKTORAL DAN BILANGAN FIBONNACI</h2>
    <h3>SILAHKAN MASUKKAN JENIS PERHITUNGAN YANG ANDA INGINKAN : </h3>
    </div>
    <h1></h1>

    <div class="tombol">
        <ul>
            <li>
            <a href="?url=suhu">KONVERSI SUHU</a>
            </li>
            <li>
            <a href="?url=faktorial">FAKTORIAL</a>
            </li>
            <li>
            <a href="?url=fibonaci">FIBONACCI</a>
            </li>
        </ul>

    </div>
</body>
</html>

<?php
if (isset($_GET['url'])){
    $url=$_GET['url'];

    switch($url)
    {
        case 'suhu':
            include 'suhu.php';
            break;

        case 'faktorial':
            include 'faktorial.php';
            break;
            
        case 'fibonaci':
            include 'fibonaci.php';
            break;

        default :
        echo "yohan permana";
            break;

        }
}

?>