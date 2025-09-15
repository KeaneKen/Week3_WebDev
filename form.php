<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $noMahasiswa = $_POST['prodi'];
    $id = $_POST['id'];
    $foto = $_POST['foto'];

    $stmt = $conn->prepare("INSERT INTO datamahasiswa (nama, umur, prodi, id, foto) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $umur, $noMahasiswa, $id, $foto);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" id="nama" placeholder="Nama">
        <input type="text" name="umur" id="umur" placeholder="Umur">
        <input type="text" name="prodi" id="prodi" placeholder="Prodi">
        <input type="text" name="id" id="id" placeholder="ID">
        <input type="text" name="foto" id="foto" placeholder="Foto">
        <button type="submit">Submit</button>
    </form>
</body>
</html>