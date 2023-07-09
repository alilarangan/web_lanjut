<html>
<header>
	<title>Pertemuan ke-3</title>
</header>
<body>
	<?php
		$judul = "Pemrograman php";
		echo "Judul dicetak 5 kali";
		echo "<br>";
		
		$a=1;
		while($a <=10){
			echo $a.". ";
			echo $judul;
			echo "<br>";
			$a=$a+1;
		}
	?>
</body>
</html>