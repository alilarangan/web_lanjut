<html>
<header>
	<title>Tugas</title>
</header>
<body>
	<?php
	echo "Nama	: Ali Warno <br> NPM	: 202043501395<hr>";
	echo "<b>Nomor 1</b>";
	$nilai=65;
	$n;
	if(($nilai>=85)&&($nilai<=100)){
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
	echo "<br> hasil konversi dari = ".$nilai." menjadi = ".$n;
	echo "<br><hr>";
	
	echo "<b>Nomor 2</b><br>";
	$bilangan=-1;
	$a;
	if($bilangan<0){
		$a="bilangan nigatif";
	}
	else if($bilangan>0){
		$a="bilangan positif";
	}
	else{
		$a="bilanga nol";
	}
	echo "Bilangan ini ".$bilangan." merupakan bilangan = ".$a;
	echo "<br><hr>";
	echo "<b>Nomor 3</b><br>";
	$bil = 7;
	if($bil % 2 ==0){
		echo "angka ".$bil." merupakan bilangan positif";
	}else{
		echo "angka ".$bil." merupakan bilangan negatif";
	}
	echo "<br><hr>";
	echo "<b>Nomor 4</b><br>";
	$seleksi = "biner";
	$desimal = 200;
	switch($seleksi){
		case "heksadesimal":
		echo "konversi dari bilangan desimal : ".$desimal." ke heksadesimal adalah = ".dechex($desimal);
			break;
		case "biner":
		echo "konversi dari bilangan desimal : ".$desimal." ke biner adalah = ".decbin($desimal);
			break;
		case "oktal":
		echo "konversi dari bilangan desimal : ".$desimal." ke oktal adalah = ".decoct($desimal);
			break;
		default:
		echo "Data tidak ditemukan";
		
	}
	?>
</body>
</html>