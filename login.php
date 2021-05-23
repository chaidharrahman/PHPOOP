<?php 
session_start();
include "koneksi.php";
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet"  href="login.css">
    <title>Form Login</title>
  </head>
  <body>
   <div class="container">
     <h2 class="text-center">Form Login</h2>
      <form method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="Username" class="form-control" placeholder="Masukkan Username Anda" autocomplete="off" required>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="Password" class="form-control" placeholder="Masukkan Password Anda" required>
        </div>
        <br>
        <button type="submit" name="submit" class="btn-btn-primary"> Submit</button>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $Username=$_POST['Username'];
  $Password=md5($_POST['Password']);
  $query= mysqli_query($koneksi,"SELECT * FROM tabel_login WHERE Username='$Username'AND Password='$Password'");
  $cek=mysqli_num_rows ($query);
  if($cek > 0){
    $_SESSION['userweb']=$Username;
    header("location:index.php" );
    exit;
  } else{
    echo "Maaf Username dan Password Anda Salah";
  }
}

?>