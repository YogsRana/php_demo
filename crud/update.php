<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "data inserted successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off">
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off">
</div>
<div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile" name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password" autocomplete="off">
</div>

  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>

    </div>
  </body>
</html>