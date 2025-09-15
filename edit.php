<?php
include 'conn.php';

// Ambil data berdasarkan id
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM datamahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        die("Data tidak ditemukan.");
    }
} else {
    header("Location: index.php");
    exit;
}

// Update data jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $prodi = $_POST['prodi'];
    $foto = $_POST['foto'];

    $update = "UPDATE datamahasiswa 
               SET nama='$nama', umur='$umur', prodi='$prodi', foto='$foto' 
               WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>"><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" value="<?php echo htmlspecialchars($row['umur']); ?>"><br><br>

        <label>Prodi:</label><br>
        <input type="text" name="prodi" value="<?php echo htmlspecialchars($row['prodi']); ?>"><br><br>

        <label>Foto (nama file):</label><br>
        <input type="text" name="foto" value="<?php echo htmlspecialchars($row['foto']); ?>"><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
