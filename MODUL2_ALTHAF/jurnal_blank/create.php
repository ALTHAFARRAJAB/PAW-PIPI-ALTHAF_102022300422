<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {
    $id = $_POST["id"];
    $judul = $_POST["nama judul"];
    $penulis = $_POST["nama penulis"];
    $tahun_terbit = $_POST["tahun_terbit"];
}
    // finisikan query untuk insert data
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit) VALUES ('$judul', '$penulis', '$tahun_terbit')";
    // Mengeksekusi query
    mysqli_query($con, $query);
    id (mysqli_affected_rows($conn)>0) {
        header("location: katalog_buku.php");
       }   else {
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    >?