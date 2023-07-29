<?php 
    include("../koneksi.php"); 
    if(isset($_GET['kd_sekolah'])){
        $kd_sekolah = $_GET['kd_sekolah'];
        $sql = "DELETE FROM sekolah WHERE kd_sekolah=$kd_sekolah";
        if ($kon->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $kon->error;
        }
        $koneksi->close();
    }
    ?>
  
    
    
    
    
    