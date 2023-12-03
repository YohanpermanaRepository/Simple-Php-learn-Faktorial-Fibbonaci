<html>
    <head>
        <title></title>
    <body>
    <?php error_reporting(1);
    if (isset($_POST['Submit'])) {
    
    $angka = $_POST['angka_inputanuser'];
        $convert  = $_POST['pilihan_konversi'];
            if ($convert == "1") {
                $reamur = (4/5) * $angka;
                $fahrenheit = (9/5) * $angka + 32;
                $kelvin = $angka + 273;


            } elseif ($convert == "2") {
                $celcius = (5/4) * $angka;
                $fahrenheit = (9/4) * $angka + 32;
                $kelvin = (5/4) * $angka + 273;
                    
            }elseif ($convert == "3") {
                $celcius = (5/9) * ($angka - 32);

                $reamur = (4/9) * ($angka - 32);
                $kelvin = (5/9) * ($angka-32) + 273;
            } elseif ($convert == "4") {
                $celcius = $angka - 273;
                $reamur = (4/5) * ($angka - 273);
                $fahrenheit = (9/5) * ($angka - 273) + 32;                      
            }else {
                    echo "! Pilih tipe Konversi";                      
                }
            }

    elseif (isset($_POST['reset'])) {
        $angka = "";
        $convert = "0";
        $reamur = "";
        $fahrenheit = "";
        $kelvin = "";
        $celcius = "";
  }
?>


<div class="atas">
    <h3>MENGHITUNG KONVERSI SUHU</h3>
        <form  method="POST">
        <h4>Pilih suhu awal yang akan di konversi :</h4>
          <select name="pilihan_konversi">
            <group>
            <option value="0" <?php if($convert == 0);
             ?>>Pilih</option>
            <option value="1" <?php if($convert == 1);
             ?>>Celcius</option>
            <option value="2" <?php if($convert == 2);
             ?>>Reamur</option>
            <option value="3" <?php if($convert == 3);
             ?>>Fahrenheit</option>
            <option value="4" <?php if($convert == 4);
             ?>>Kelvin</option>
            </group>   
          </select>


        <table>
            <tr>
            <h4>Masukkan nilai suhu yang akan di cari :</h4>
            </tr>
            <tr>
            <td><p><input type="number" name='angka_inputanuser' value="<?=$angka; ?>" required/><p> </td>

            <td> <input type="submit" name="Submit" value="PROSES"></td>

            <td> <button type="submit" name="reset">RESTART</button></td>
            </tr>
        </table>
       

        <table cellpadding="20px">
        <tr>
        <th colspan=3>
        <?php if($convert == 0)
            {echo"";} ?>
        <?php if($convert == 1)
            {echo"Hasil Konversi Suhu Celcius";} ?>
        <?php if($convert == 2)
            {echo"Hasil Konversi Suhu Reamur";} ?>
        <?php if($convert == 3)
            {echo"Hasil Konversi Suhu Fahrenheit";} ?>
        <?php if($convert == 4)
            {echo"Hasil Konversi Suhu Kelvin";} ?>
        </th>
        </tr>

        <tr>        
        <th>
        <?php if($convert == 0)
            {echo"";} ?>
        <?php if($convert == 1)
            {echo"Reamur";} ?>
        <?php if($convert == 2)
            {echo"Celcius";} ?>
        <?php if($convert == 3)
            {echo"Celcius";} ?>
        <?php if($convert == 4)
            {echo"Celcius";} ?>
        </th>

        <th>
        <?php if($convert == 0)
            {echo"";} ?>
        <?php if($convert == 1)
            {echo"Fahrenheit";} ?>
        <?php if($convert == 2)
            {echo"Fahrenheit";} ?>
        <?php if($convert == 3)
            {echo"Reamur";} ?>
        <?php if($convert == 4)
            {echo"Reamur";} ?>
        </th>
                            
        <th>
        <?php if($convert == 0)
            {echo"";} ?>
        <?php if($convert == 1)
            {echo"Kelvin";} ?>
        <?php if($convert == 2)
            {echo"Kelvin";} ?>
        <?php if($convert == 3)
            {echo"Kelvin";} ?>
        <?php if($convert == 4)
            {echo"Fahrenheit";} ?>
        </th>

        </tr>
        <tr>
        <td>
        <?php if($convert == 0)
        {echo"";} ?>
        <?php if($convert == 1)
        {echo "$reamur °R";}?>
        <?php if($convert == 2
        ){echo "$celcius °C";}?>
        <?php if($convert == 3)
        {echo "$celcius °C";}?>
        <?php if($convert == 4)
        {echo "$celcius °C";}?>
        </td>
        
        <td>
        <?php if($convert == 0)
            {echo"";} ?>
        <?php if($convert == 1)
            {echo "$fahrenheit °F";}?>
        <?php if($convert == 2)
            {echo "$fahrenheit °F";}?>
        <?php if($convert == 3)
            {echo "$reamur °R";}?>
        <?php if($convert == 4)
            {echo "$reamur °R";}?>
        </td>
        
        <td>
        <?php if($convert == 0)
            {echo"";} ?>
        <?php if($convert == 2)
            {echo "$kelvin °K";}?>
        <?php if($convert == 1)
            {echo "$kelvin °K";}?>
        <?php if($convert == 3)
            {echo "$kelvin °K";}?>
        <?php if($convert == 4)
        {echo "$fahrenheit °F";}?>
      </td>
      </tr>
    </table>
</form>
</div> 

</body>
</html>



<style type="text/css">
    body{
    background-color:rgb(186, 149, 0);
    color: white;  
}
.atas{
    margin-left: 290px;
    padding-top: 30px;
}
.dua{
    margin-left: 290px;
}



</style>