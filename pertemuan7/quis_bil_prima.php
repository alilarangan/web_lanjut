<html>
<head>
    <title>Quis</title>
</head>
<body>
    <h1>Quis Kelompok 1 (Ganjil)</h1>
    <h2>Menampilkan bilangan prima</h2>
    <form action="#" method="post">
        <input type="text" name="prima">
        <input type="submit" value="hitung" name="simpan">
    </form>
    <?php
    if(isset($_POST['simpan'])){
        $ak = $_POST['prima'];
        for($a=1; $a<=$ak; $a++){
            $i =0;
            for($b =1; $b<=$a; $b++){
                if($a % $b ==0){
                    $i++;
                }
            }
            if($i == 2){
                echo $a." ";
            }
        }
    }
    ?>
</body>
</html>