<html>
<header>
	<title></title>
</header>
<body>
	<form method="POST" action="#">
		baris <input type="text" name="baris"><br>
		kolom <input type="text" name="kolom"><br><br>
		<input type="submit" value="Proses">
	</form>
	<table border=1>
		<?php
		if(isset($_POST["baris"])){
			for($i = 1; $i<= $_POST['baris']; $i++){
				echo "<tr>";
				if(isset($_POST["kolom"])){
					
				for($b = 1; $b<= $_POST["kolom"]; $b++){
					echo "<td>Oke</td>";
				}
				echo "</tr>";
			}
		}
		}
		?>
	</table>
</body>
</html>