<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['update'])) {
    $id = $_GET['id']; 
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    // Query untuk mengupdate data buku berdasarkan ID
    $query = "UPDATE tb_buku SET judul = ?, penulis = ?, tahun_terbit = ? WHERE id = ?";
    
    //Buatlah query untuk update data
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, $judul, $penulis, $tahun_terbit, $id);
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("location: katalog_buku.php"); 
        exit();
    } else {
        echo "<script>alert('Data gagal diperbarui');</script>";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>