<?php

include("config.php");


if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO data_pegawai (nama, jenis_kelamin) VALUE ('$nama', '$jk')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-pegawai.php?status=sukses');
    } else {
        header('Location: list-pegawai.php?status=gagal');
    }
} 
?>