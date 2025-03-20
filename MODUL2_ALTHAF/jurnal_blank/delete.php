<?php
include 'connect.php';
// cek apakah ada data yang dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Mendefinisikan query untuk menghapus data menggunakan $id
    $query = "DELETE FROM tb_buku WHERE id = '$id'";
    mysqli_query($conn, $query);
    // Mengeksekusi query
    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>