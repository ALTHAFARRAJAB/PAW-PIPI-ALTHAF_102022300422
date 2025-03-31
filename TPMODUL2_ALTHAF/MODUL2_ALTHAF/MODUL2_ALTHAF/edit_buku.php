<?php
include 'connect.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('ID tidak valid!'); window.location.href='katalog_buku.php';</script>";
    exit();
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = "SELECT * FROM tb_buku WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if (mysqli_num_rows($data) == 0) {
    echo "<script>alert('Buku tidak ditemukan!'); window.location.href='katalog_buku.php';</script>";
    exit();
}

$buku = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include('navbar.php'); ?>
    <center>
        <div class="container">
            <h1>Ubah Detail Buku</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $id; ?>">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="judul" id="judul" value="<?= htmlspecialchars($buku['judul']); ?>" required>
                                <label for="judul">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="penulis" id="penulis" value="<?= htmlspecialchars($buku['penulis']); ?>">
                                <label for="penulis">Penulis</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= htmlspecialchars($buku['tahun_terbit']); ?>" required>
                                <label for="tahun_terbit">Tahun Terbit</label>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary mb-3 mt-3 w-100">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
