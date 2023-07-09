<html>
<head>
    <title>tugas1</title>
</head>
<body>
<?php 
    $nilai=65; // mendeklarasikan variabel untuk nilai yang akan dikonversi
	$n;        //vaeriabel untuk menyimpan hasil dari konversi
	if(($nilai>=85)&&($nilai<=100)){
        /*logika atau kondisi untuk membandingkan apakah nilai dari variabel $nilai
         lebih besar dari 85 dan lebih kecil dari 100? jika iya maka variabel $n akan bernilai A jika tidak maka
         akan mengeksekusi kode selanjutnya*/
		$n="A";
	}
	else if(($nilai>=70)&& ($nilai<=84)){
		$n="B";
	}
	else if(($nilai>=60)&&($nilai<=70)){
		$n="C";
	}
	else if(($nilai>=50)&&($nilai<=60)){
		$n="D";
	}
	else{
		$n="E";
	}
	echo "<br> hasil konversi dari = ".$nilai." menjadi = ".$n; /* akan menampilkan variabel $nilai dan variabel $n
    maka yang akan tampil di layar "hasil dari koversi 65 menjadi = C"*/
    ?>
</body>
</html>