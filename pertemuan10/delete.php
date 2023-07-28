<?php 
    include("koneksi.php"); 
    if(isset($_GET['ni'])){
        $nis = $_GET['ni'];
        $sql = "DELETE FROM siswa WHERE ni=$nis";
        if ($kon->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $kon->error;
        }
        $koneksi->close();
    }
    ?>
  
    
    
    
    
    