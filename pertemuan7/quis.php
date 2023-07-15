<html>
<head>
    <title>Quis</title>
</head>
<body>
    <h1>Quis Kelompok 1 (Ganjil)</h1>
    <h2>Menampilkan deret bilangan ganjil</h2>
    <form action="#" method="post">
        <input type="text" name="akhir">
        <input type="submit" value="hitung" name="simpan">
    </form>
    <?php
    if(isset($_POST['simpan'])){
        $ak = $_POST['akhir'];
        for($a =1; $a<=$ak; $a++){
            $b = 2 * $a-1;
            echo $b." ";
        }
    }
    ?>
</body>
</html>