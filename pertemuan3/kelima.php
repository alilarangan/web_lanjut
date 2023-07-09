<html>
<header>
	<title>Pertemuan ke-3</title>
</header>
<body>
	<?php
		$nilai=-1;
		$n;
		if(($nilai>=0)&&($nilai<=45)){
			$n="E";
		}else if(($nilai>=46) &&($nilai<=59)){
			$n="D";
		}
		else if(($nilai>=60) &&($nilai<=74)){
			$n="C";
		}
		else if(($nilai<=75) &&($nilai>=84)){
			$n="B";
		}
		else if(($nilai<=85) &&($nilai>=100)){
			$n="A";
		}
		else{
			$n="Nilai tidak terdeteksi";
		}
		echo $n;
	?>
</body>
</html>