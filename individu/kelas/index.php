<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kelas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        if(isset($_GET['aksi'])){
            $aksi =$_GET['aksi'];

            switch($aksi){
                case 'tambah':
                    include("input.php");
                break;
                case 'edit':
                    include("edit.php");
                break;
                case 'delete':
                    include("delete.php");
                break;
                default:
                    include("view.php");
                break;
            }
        }else{
            include("view.php");
        }
    ?>
</body>
</html>