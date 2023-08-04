<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Individu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include("menu.php");
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'siswa':
                include("siswa/index.php");
                break;
            case 'panitia':
                include("panitia/index.php");
                break;
            case 'kelas':
                include("kelas/index.php");
                break;
            default:
                echo "<h1>Selamat Datang di Penerimaan MABA";
                break;
        }
    }else{
        echo "<h1>Selamat Datang di Penerimaan MABA";
    }
    ?>
    <script src="script/script.js"></script>
</body>
</html>