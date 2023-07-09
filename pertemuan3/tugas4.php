<html>
<header>
	<title>tugas4</title>
</header>
<body>
	<?php
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