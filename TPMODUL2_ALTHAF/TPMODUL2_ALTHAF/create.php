<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = isset($_POST["judul"]) ? $_POST["judul"] : "";
    $penulis = isset($_POST["penulis"]) ? $_POST["penulis"] : "";
    $tahun_terbit = isset($_POST["tahun_terbit"]) ? $_POST["tahun_terbit"] : "";
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $sql = "INSERT INTO tb_buku (judul, penulis, tahun_terbit) VALUES ('$judul', '$penulis', '$tahun_terbit')";
    // ==================3==================
    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan!";
        header("Location: katalog.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>