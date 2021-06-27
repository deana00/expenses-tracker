<?php
require_once "dbconnect.php";
require_once "function.php";
$sql = "SELECT id, dates, category, amount FROM records ORDER BY dates";
$record = read($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Expenses</title>
</head>

<body>
    <div align="center">
        <h1>Welcome</h1>
        <h2>List of Your Expenses</h2>
        <a href="add_record.php"><button>Add</button></a><br><br>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Date</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
            <?php foreach ($record as $rec) : ?>
                <tr>
                    <td><?= date('d F Y', strtotime($rec['dates'])); ?></td>
                    <td><?= $rec['category']; ?></td>
                    <td><?= $rec['amount']; ?></td>
                    <td><a href="update_record.php?id=<?= $rec['id']; ?>">Edit</a>
                        <a href="delete_record.php?id=<?= $rec['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>