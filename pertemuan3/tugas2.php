<html>
<head>
    <title>tugas2</title>
</head>
<body>
<?php 
    $bilangan=-1; /*mendeklarasikan bilangan*/
	$a; //berfungsi untuk menyimpan pesan bilangan
	if($bilangan<0){//kondisi dimana jika nilai dari variabel $bilangan lebih kecil dari 0 maka bilangan tersebut adalah bilang negatif
		$a="bilangan nigatif";
	}
	else if($bilangan>0){//kondisi nimana jika bilangan lebih besar dari 0 maka bilangan positif
		$a="bilangan positif";
	}
	else{
		$a="bilanga nol";
	}
	echo "Bilangan ini ".$bilangan." merupakan bilangan = ".$a;
    ?>
</body>
</html>