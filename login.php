<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_assoc($query);

if($data){
    echo "Login berhasil";
}else{
    echo "Login gagal";
}
?>