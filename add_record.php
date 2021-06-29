<?php
require_once "function.php";

if (isset($_POST['save'])) {
    if (add($_POST)) {
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
    <title>ADD RECORD</title>
</head>

<body>
    <div align="center">
        <h1>Add expense record</h1><br>
        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="hidden" name="id" required></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="datetime-local" name="dates" required></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><select name="category" >
                        <option value="Food And Beverage">Food And Beverage</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Bill">Bill</option>
                        <option value="Entertaiment">Entertaiment</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="number" name="amount" required></td>
                </tr>
                <tr>
                    <td><button type="submit" name="save">Save</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>