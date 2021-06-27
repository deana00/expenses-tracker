<?php
if (isset($_GET["id"])) {
    require_once "dbconnect.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM records WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Record has been deleted.";
        header('Location: index.php');
        exit;
    } else {
        die("Can't delete record.");
    }
} else {
    die("No records.");
}
