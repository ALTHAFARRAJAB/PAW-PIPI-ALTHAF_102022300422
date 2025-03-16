<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

// Periksa apakah tombol update diklik
if (isset($_POST['update'])) {
    $id = $_GET['id']; // Ambil ID dari parameter URL
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    // Query untuk mengupdate data buku berdasarkan ID
    $query = "UPDATE tb_buku SET judul = ?, penulis = ?, tahun_terbit = ? WHERE id = ?";
    // Gunakan prepared statement untuk keamanan
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $judul, $penulis, $tahun_terbit, $id);
    mysqli_stmt_execute($stmt);
    // Periksa apakah data berhasil diupdate
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("location: katalog_buku.php"); // Redirect ke halaman katalog
        exit();
    } else {
        echo "<script>alert('Data gagal diperbarui');</script>";
    }
    // Tutup statement dan koneksi
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
