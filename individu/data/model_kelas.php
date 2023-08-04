<?php
include("koneksi.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // untuk update
    if(isset($_POST['update'])){
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        
        $sql = "UPDATE kelas SET nama_kelas='$nama' WHERE kode_kelas='$kode'";

        if ($kon->query($sql) === TRUE) {
            header("Location: ../index.php?page=kelas");
            exit;
        } else {
            echo "Error updating record: " . $kon->error;
        }
    }
    // untuk insert
    else{
    $kode =$_POST['kode'];
    $nama = $_POST['nama'];

    $sql = "INSERT INTO kelas(kode_kelas, nama_kelas) VALUES ('$kode','$nama')";
    
    if($kon->query($sql)==TRUE){
        header("Location: ../index.php?page=kelas");
        exit();
    }else{
        echo "insert error ". $sql . "<br>" . $kon->error;
    }
 }
}
// untuk hapus
else {
    $id = $_GET["id"];

    $sql = "DELETE FROM kelas WHERE kode_kelas = $id";

    if ($kon->query($sql) === TRUE) {
        header("Location: ../index.php?page=kelas");
        exit;
    } else {
        echo "Error deleting record: " . $kon->error;
    }
}

$kon->close();
?>