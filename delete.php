<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize input

    $sql = "DELETE FROM datamahasiswa WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php"); // go back to main page
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
    exit;
}
?>