<?php
$host="localhost";
$user ="root";
$pass ="";
$database="maba";

$kon = new mysqli($host, $user, $pass, $database);

if($kon->connect_error){
    die("koneksi gagal : ".$kon->connect_error);
}
?>