<?php
include("koneksi.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // untuk update
    if(isset($_POST['update'])){
        $nis =$_POST['nis'];
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];
        $skl = $_POST['skl'];
        
        $sql = "UPDATE siswa SET nis='$nis',nama='$nama',tgl='$tgl',asal_sekolah='$skl' WHERE nis='$nis'";

        if ($kon->query($sql) === TRUE) {
            header("Location: ../index.php?page=siswa");
            echo "sukses";
            exit;
        } else {
            echo "Error updating record: " . $kon->error;
        }
    }
    // untuk insert
    else{
    $nis =$_POST['nis'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $skl = $_POST['skl'];

    $sql = "INSERT INTO siswa(nis, nama, tgl, asal_sekolah) VALUES ('$nis','$nama','$tgl','$skl')";
    
    if($kon->query($sql)==TRUE){
        header("Location: ../index.php?page=siswa");
        echo "sukses";
        // exit();
    }else{
        echo "insert error ". $sql . "<br>" . $kon->error;
    }
 }
}
// untuk hapus
else {
    $id = $_GET["id"];

    $sql = "DELETE FROM siswa WHERE nis = $id";

    if ($kon->query($sql) === TRUE) {
        header("Location: ../index.php?page=siswa");
        exit;
    } else {
        echo "Error deleting record: " . $kon->error;
    }
}

$kon->close();
?>