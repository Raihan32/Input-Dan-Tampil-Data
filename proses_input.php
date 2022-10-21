<?php

    include "koneksi.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komen = $_POST['komen'];

    $insert = mysqli_query($mysqli, "insert into komentar set nama='$nama', email='$email', komen='$komen'");
    

?>