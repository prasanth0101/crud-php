<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "date inserted sucessfully";
    }else{
      die(mysqli_error($con));
    }
}

?>





<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud Functions</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post"> 
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="password" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top:10px" name='submit'>Submit</button>
    </div>
</form>
  </body>
</html>