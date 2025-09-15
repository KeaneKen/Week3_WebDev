<?php
include 'conn.php';
 $sql = "SELECT nama, umur, prodi, foto, id FROM datamahasiswa";
 $result = mysqli_query($conn, $sql);
 $mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <h4><a href="form.php">Tambah Mahasiswa</a></h4>

        <?php if (count($mahasiswa) > 0) : ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Prodi</th>
                <th>ID</th>
        </tr>
        </thead>
        
        <?php foreach ($result as $row) : ?>
            <tr>
                <td> <img src="img/<?php echo htmlspecialchars($row["foto"]); ?>" 
                    alt="<?php echo htmlspecialchars($row["nama"]); ?>" 
                    width="80">
                </td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["umur"]; ?></td>
                <td><?php echo $row["prodi"]; ?></td>
                <td><?php echo $row["id"]; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo urlencode($row["id"]); ?>"
                        onclick="return confirm('R u sure?');">
                        Delete
                    </a>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo urlencode($row["id"]); ?>">Edit</a> | 
                </td>

            </tr>
        <?php endforeach; ?>
        </table>
            <?php endif; ?>
    </body>
</html>