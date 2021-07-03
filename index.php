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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    tr:nth-child(odd) {
      background-color: #ffffff;
    }

    tr:nth-child(even) {
      background-color: #e6e6e6;
    }

    th,
    td {
      border: 0px;
      padding: 5px;

    }

    tr:hover {
      background-color: #cccccc;
    }

    p.outset {
      border-style: outset;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 5px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 8px;
    }

    .button1 {
      background-color: #f44336;
      border: none;
      color: white;
      padding: 5px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 8px;
    }

    body {
      background: linear-gradient(to bottom right, #ff6699 0%, #3366ff 100%);
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-attachment: fixed
    }

    table {
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Sakuku</h5>
      <span class="text-muted">Never spend your money before you have earned it.</span>
    </div>
  </div>
  <nav class="navbar  navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <br>
  <div align="center">
    <h1>Welcome</h1>
    <h2>List of Your Expenses</h2>
    <br>

    <div class="container">
      <table class="table-borderless" cellspacing="0" cellpadding="10">
        <thead align="center">
          <th style=" background-color: #0066ff"><b>Date</b></th>
          <th style="background-color: #0066ff"><b>Category</b></th>
          <th style="background-color: #0066ff"><b>Amount</b></th>
          <th style="background-color: #0066ff"><b>Action</b></th>
        </thead>
        <tbody>
          <?php foreach ($record as $rec) : ?>
            <tr>
              <td><?= date('d F Y', strtotime($rec['dates'])); ?></td>
              <td><?= $rec['category']; ?></td>
              <td>Rp<?= $rec['amount']; ?></td>
              <td align="center">
                <a href="update_record.php?id=<?= $rec['id']; ?>" class="button">Edit</a>
                <a href="delete_record.php?id=<?= $rec['id']; ?>" class="button1" onclick="return confirm('Are you sure want to delete? Data will be permanently lost.');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <br>
    <a href="add_record.php" class="button">Add Your Expenses</a><br><br>
  </div>
  <br><br><br><br><br><br><br>
  <footer class="footer bottom mt-auto py-3 bg-light">
    <div align="center">
      <div class="container">
        <span class=" h3 text-muted">Ilmu Komputer</span> <br>
        <div class="row">
          <div class="col-sm">
            <span class="text-muted">Fakultas Matematika dan Ilmu Pengetahuan Alam</span> <br>
            <span class="text-muted">Universitas Lampung</span> <br>
            <span class="text-muted">Jl Sumantri Brojonegoro No 1 Gedong Meneng</span> <br>
          </div>
        </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>