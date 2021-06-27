<?php
require_once "function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM records WHERE id=$id";
    $record = read($sql);
} else {
    die('Oops! Something went wrong. Please try again later.');
}

if (isset($_POST['update'])) {
    if (update($_POST)) {
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE RECORD</title>
</head>

<body>
    <div align="center">
        <h1>Update expense record</h1><br>
        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="hidden" name="id" value="<?= $record[0]['id']; ?>" required></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="datetime-local" name="dates" value="<?= date('Y-m-d\TH:i:s', strtotime($record[0]['dates'])); ?>"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><input type="text" name="category" value="<?= $record[0]['category']; ?>" required></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text" name="amount" value="<?= $record[0]['amount']; ?>" required></td>
                </tr>
                <tr>
                    <td><button type="submit" name="update">Update</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>