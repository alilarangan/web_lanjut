<html>
<header>
	<title>Pertemuan ke-3</title>
</header>
<body>
	<?php
		$a= 5;
		$b=15;
		if($a>$b){
			echo "a lebih besar dari b";
		}else{
			echo "a sama atau lebih kecil dari b";
		}
	?>
	<br>
	<?php
	$harga = 1500;
	switch($harga){
		case 2000;
		echo "Harga mahal";
		break;
		case 1500;
		echo "Harganya Murah";
		break;
		default:
		echo "Saya tidak tahu";
	}
	?>
</body>
</html>