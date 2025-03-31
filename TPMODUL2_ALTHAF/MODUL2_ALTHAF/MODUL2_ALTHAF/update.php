<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->

<?php
include 'connect.php';

if (isset($_POST['update'])) {
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        echo "<script>alert('ID tidak valid!'); window.location.href='katalog_buku.php';</script>";
        exit();
    }

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
    $tahun_terbit = mysqli_real_escape_string($conn, $_POST['tahun_terbit']);

    $query = "UPDATE tb_buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='katalog_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data.'); window.location.href='edit.php?id=$id';</script>";
    }
}
?>
