<html>
<head>
    <title>Quis</title>
</head>
<body>
    <h1>Quis Kelompok 1 (Ganjil)</h1>
    <h2>Menampilkan Luas dinding dan harga sebuah kamar</h2>
    
    <?php
        $sisi = 12*4;
        $pintu = 2;
        $jendela = 1;
        $luas_cat = $sisi - $pintu -$jendela;
        $harga= $luas_cat * 25000;

        echo "<h3>Luas Dinding yang akan dicat : ".$luas_cat." meter</h3>";
        echo "<h3>Harga keseluruhan pengecatan : Rp ".number_format($harga, 0,',','.')." </h3>";


    ?>
</body>
</html>