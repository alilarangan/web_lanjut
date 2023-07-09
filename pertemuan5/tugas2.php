<html>
<header>
	<title></title>
</header>
<body>
		<form method="POST" action="#">
		Nama <input type="text" name="nama"><br>
		Aksi <input type="radio" name="aksi" value="Melangkah">Melangkah
			 <input type="radio" name="aksi" value="Melompat">Melompat<br>
		Jumlah<input type="text" name="jumlah"><br>
		<input type="submit" value="Go">
	</form>
	<?php
	$nama = $_POST["nama"]; 
	$aksi = $_POST["aksi"];
	$jml = $_POST["jumlah"];
		for($i=1; $i<=$jml; $i++){
			echo $nama." ".$aksi." ".$i." kali <br>";
			if($i>=$jml){
				echo $nama." Berhenti ".$aksi;
			}
		}
	?>
</body>
</html>