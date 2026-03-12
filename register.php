<?php
include "koneksi.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($conn,"INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')");

echo "Register berhasil";
?>