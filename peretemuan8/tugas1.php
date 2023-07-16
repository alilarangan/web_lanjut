<html>
<head>
    <title>tugas</title>
</head>
<body>
    <?php
    $a=9; //Mendefinisikan variabel $a dengan nilai 9
    $b=5; //Mendefinisikan variabel $b dengan nilai 5
    $c = $a>$b; 
    /*Membandingkan apakah nilai variabel $a lebih besar dari $b dengan menggunakan 
    operator >. Hasil perbandingan akan disimpan dalam variabel $c.*/ 
    echo "$a>$b : $c";
    /*Mencetak hasil perbandingan dalam format string dengan menggunakan fungsi echo. 
    Variabel $c akan dicetak sebagai nilai boolean (true jika $a lebih besar dari $b, 
	dan false jika sebaliknya). */
    echo "<hr>";
    //Mencetak garis horizontal <hr> untuk memisahkan hasil perbandingan berikutnya.
    $c= $a<$b;
    /*Membandingkan apakah nilai variabel $a lebih kecil dari $b dengan menggunakan operator <. 
    Hasil perbandingan akan disimpan dalam variabel $c. */
    echo "$a<$b : $c";
    /*Mencetak hasil perbandingan dalam format string dengan menggunakan fungsi echo. Variabel $c akan 
    dicetak sebagai nilai boolean (true jika $a lebih kecil dari $b, dan false jika sebaliknya). */
    echo "<hr>";
    //Mencetak garis horizontal <hr> untuk memisahkan hasil perbandingan berikutnya.
    $c=$a!=$b;
    /*Membandingkan apakah nilai variabel $a tidak sama dengan $b dengan menggunakan operator 
    !=. Hasil perbandingan akan disimpan dalam variabel $c. */
    echo "$a $b : $c"
    /*Mencetak hasil perbandingan dalam format string dengan menggunakan fungsi echo.
    Variabel $c akan dicetak sebagai nilai boolean (true jika $a tidak sama dengan $b, dan false jika sebaliknya). */
    ?>
</body>
</html>