<html>
<header>
	<title>Pertemuan ke-3</title>
</header>
<body>
	<?php
		$array = array("A","B","C","D");
		$array2[1] = 15;
		$array2[2]=16;
		$array2["tiga"] =17;
		$array2[4]=18;
		$matriks[1][1]=15;
		$matriks[1][2]=17;
		$matriks[2][1]=18;
		$matriks[2][2]=19;
		$nilaimutu=$array[3];
		list($adi, $andri, $gofo) = $array;
		echo "isi element array pada indeks  3";
		echo $array[3];
		echo "<br>";
		echo "isi element array2 pada indeks 2 ";
		echo $array2[2];
		echo "<br>";
		echo "<hr>";
		$fruit = array("Aple","banana","orange","manggo");
		list($red_fruit, $orange_fruit) = $fruit;
		echo $red_fruit."<br>";
		echo $orange_fruit;
		echo "<br>";
	?>
</body>
</html>