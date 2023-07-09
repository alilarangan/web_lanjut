<html>
<header>
	<title></title>
</header>
<body>
	<form method="POST" action="#">
		NPM	: <input type="text" name="npm"><br><br>
		Nama: <input type="text" name="nama"><br><br>
		<input type="submit" value="Proses">
	</form>
	<?php
	if (isset($_POST["nama"])){
		echo "Nama : ".$_POST["nama"]."<br>";
	}
	if (isset($_POST["npm"])){
		echo "NPM : ".$_POST["npm"];
	}
	
	?>
</body>
</html>