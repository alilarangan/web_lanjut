<html>
<head>
    <title>tugas2</title>
</head>
<body>
    <?php

    function cetakSlipGaji($nama, $gaji, $terlambat){
        echo "Besaran Honor yang didapat oleh : ".$nama."<br>Gaji = ".$gaji."<br>";
        $potongan = $terlambat * 15000;
        echo "Potongan Keterlambatan = ".$potongan;
        echo "<br>Total = ".$gaji-$potongan;
    }
    cetakSlipGaji("Gus Samsudin",4500000,10);
    ?>
</body>
</html>