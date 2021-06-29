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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
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
body {
  background: linear-gradient(to bottom right, #ff6699 0%, #3366ff 100%);
  background-size:100% 100%;
  background-repeat:no-repeat;
  background-attachment: fixed
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  
  display: inline-block;
  border: 1px solid #ccc;
  
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  
  display: inline-block;
  border: 1px solid #ccc;
  
  box-sizing: border-box;
}
input[type=datetime-local], select {
  width: 100%;
  padding: 12px 20px;
  
  display: inline-block;
  border: 1px solid #ccc;
  
  box-sizing: border-box;
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
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<br>
    <div align="center">
        <h1>Add expense record</h1><br>
        <form action="" method="post">
            <table class="table-borderless" cellspacing="0" cellpadding="10">
                <tr>
                    <td><input type="hidden" name="id" required></td>
                </tr>
                <tr>
                    <td style = "background-color: #0066ff"><b>Date</b></td>
                    <td style = "background-color: #0066ff"><input type="datetime-local" name="dates" required></td>
                </tr>
                <tr>
                    <td style = "background-color: #0066ff"><b>Category</b></td>
                    <td style = "background-color: #0066ff"><select name="category" >
                        <option value="Food And Beverage">Food And Beverage</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Bill">Bill</option>
                        <option value="Entertaiment">Entertaiment</option>
                    </select></td>
                </tr>
                <tr>
                    <td style = "background-color: #0066ff"><b>Amount Rp</b></td>
                    <td style = "background-color: #0066ff"><input type="number" name="amount" required></td>
                </tr>
                <tr>
                    <td colspan="2" style= "text-align: center"><button type="submit" name="save" class="button">Save</button></td>
                </tr>
            </table>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="footer fixed-bottom mt-auto py-3 bg-light">
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