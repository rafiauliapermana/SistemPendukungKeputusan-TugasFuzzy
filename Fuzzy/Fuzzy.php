// Rafi Aulia Permana / 20051397071 / 2020A //

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Metode Fuzzy </title>
</head>
<body style="text-align: center;">
<h1> Logika Fuzzy </h1>
<br>
<br>
<form method="post" action="">
    <input type="number" name="input" placeholder="Masukkan Angka" required="">
    <input type="submit" name="submit" value="Kirim">
</form>
<h3>HASIL LOGIKA FUZZY</h3>
<br>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $input = $_POST['input'];
    echo "DOMAIN YANG ANDA MASUKKAN ADALAH : <b>", ($input), "</b><br>";
    if($input >= 0 and $input <= 40){
        echo "<b>KELENGKAPAN KURANG</b>";
    }elseif($input >= 0 and $input <= 60){
        echo "<b>KONDISI KURANG</b>";
    }elseif($input >= 61 and $input <= 80){
        echo "<b>KONDISI DAN KELENGKAPAN CUKUP</b>";
    }elseif($input >= 81 and $input <= 100){
        echo "<b>KELENGKAPAN LENGKAP dan KONDISI BAGUS</b>";
    }else{
        echo 'DATA TIDAK DITEMUKAN';
    }
}