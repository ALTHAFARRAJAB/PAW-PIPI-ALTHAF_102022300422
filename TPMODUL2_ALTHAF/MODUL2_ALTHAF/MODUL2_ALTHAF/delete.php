<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengambil GET request dari URL kemudian simpan variabel id
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Pastikan ID hanya angka untuk menghindari SQL Injection

    // ==================2==================
    // Definisikan $query untuk menghapus data menggunakan $id
    $query = "DELETE FROM tb_buku WHERE id = $id"; // Tidak perlu tanda kutip jika ID adalah angka

    // ==================3==================
    // Eksekusi query
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        header("location: katalog_buku.php");
        exit(); // Pastikan tidak ada kode lain yang dieksekusi setelah redirect
    } else {
        echo "<script>alert('Data gagal dihapus atau ID tidak ditemukan');</script>";
    }
} else {
    echo "<script>alert('ID tidak diberikan');</script>";
}
?>