<?php
$host="localhost";
$user="root";
$pass="";
$database="output_wed";

$koneksi= mysqli_connect($host,$user,$pass,$database);
if(!$koneksi){
    echo"koneksi berhasil";
}
?>