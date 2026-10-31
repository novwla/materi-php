
<?php
    require 'function.php';
    $id = $_GET["id"];

    echo "Id nya adalah = " . $id . "<hr>";

    $mahasiswa = query_db("SELECT * FROM mahasiswa WHERE id = $id")[0];

    if (isset($_POST["submit"])) {

        if (edit_data($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page-form">

<div class="container">

    <div class="form-card">

        <h3>Edit Data Mahasiswa</h3>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $mahasiswa["id"]; ?>">

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?php echo $mahasiswa["nim"]; ?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?php echo $mahasiswa["nama"]; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $mahasiswa["email"]; ?>">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $mahasiswa["jurusan"]; ?>">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?php echo $mahasiswa["gambar"]; ?>" placeholder="Contoh: mahasiswa1.jpg">
            </div>

            <div class="button-group">
                <button type="submit" name="submit" class="btn btn-tambah">Edit Data</button>
                <a href="index.php" class="btn btn-kembali">Kembali</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>
