<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
    include ("menu.php");
    include("data/koneksi.php");
    function siswa()
    {
        echo "tampilan siswa";
    }
    function panitia()
    {
        include("panitia/index.php");
    }
    function kelas()
    {
        include("kelas/index.php");
    }
    function pesan()
    {
        echo "tidak ditemukan";
    }
    function dasboard()
    {
        include("dasboard.php");
    }
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'dasboard':
                dasboard();
                break;
            case 'siswa':
                siswa();
                break;
            case 'panitia':
                panitia();
                break;
            case 'kelas':
                kelas();
                break;
            default:
                pesan();
                break;
        }
    } else {
        pesan();
    }
    ?>
    <script src="script/script.js"></script>
    </body>
</html>