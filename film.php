<?php
include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM films");

while($film = mysqli_fetch_array($data)){
    echo "<h2>".$film['title']."</h2>";
    echo "<p>".$film['description']."</p>";
}
?>