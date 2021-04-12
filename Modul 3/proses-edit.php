<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];

    $sql = "UPDATE data_pegawai SET nama='$nama', jenis_kelamin='$jk' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-pegawai.php?status=sukses');
    } else {
        die("Gagal menyimpan perubahan!");
    }
} 
?>