<html>
<header>
	<title>Tugas</title>
</header>
<body>
	<FORM action="#" method="POST">
	<table style="border: 1px solid black;">
		<tr>
			<td colspan="3"><h1 style="text-align: center;"> FORM BIODATA</h1></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td>:</td>
			<td><input type="text" name="firstname" autocomplete="off"></td>
		</tr>
		<tr>
			<td style="vertical-align:top;">Gander</td>
			<td style="vertical-align:top;">:</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
				<input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td style="vertical-align:top;">Hobby</td>
			<td style="vertical-align:top;">:</td>
			<td><input type="checkbox" name="option[]" value="Korespondensi">Korespondensi<br>
				<input type="checkbox" name="option[]" value="Traveling">Traveling<br>
				<input type="checkbox" name="option[]" value="Shopping">Shopping</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select name="pen">
					<option value="SD">SD
					<option value="SMP">SMP
					<option value="SMA">SMA
				</select>
			</td>
		</tr>
		<tr>
			<td style="vertical-align:top;">Alamat</td>
			<td style="vertical-align:top;">:</td>
			<td><textarea rows="3" cols="21" name="alamat"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Simpan" name="simpan"></td>
		</tr>
		<tr>
			<td colspan="3"><hr>Hasil Outputnya :</td>
		</tr>
		<tr>
			<td colspan="3"><h1>Biodata Anda</h1></td>
		</tr>
		</FORM>
		<?php
		if(isset($_POST['simpan'])){
		$nama = $_POST['firstname'];
		$jk = $_POST['jk'];
		$k=$_POST['option'];
		$p=$_POST['pen'];
		$a=$_POST['alamat'];
			echo "<tr>
				<td>Nama</td>
				<td>:</td>
				<td>".$nama."</td>
			</tr>";
			echo "<tr>
				<td>Gender</td>
				<td>:</td>
				<td>".$jk."</td>
			</tr>";
			echo "<tr>";
			echo "<td>Hobby</td>";
			echo "<td>:</td>";
			echo "<td>";
			for($i=0; $i<count($k); $i++){
				echo $k[$i];
				if($i<count($k)-1){
					if($i==count($k)-2){
						echo " dan ";
					}else{
						echo ", ";
					}
				}
			}
			echo "</td>";
			echo "<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td>".$p."</td>
			</tr>";
			echo "<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>".$a."</td>
			</tr>";
		}
		?>
	</table>
</body>
</html>