<?php

 include 'connect.php';
 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sql="INSERT INTO `crud01`( `name`, `email`, `mobile`) VALUES ('$name',' $email','$mobile')";
    $result =mysqli_query($con,$sql);
if($result){
   // echo"data inserted successfull";
   header("location:display.php");
}else{
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
  
<div class="container my-3">
<form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name"name="name">
     </div>
     <div class="form-group">
    <label>email</label>
    <input type="text" class="form-control" placeholder="Enter your email"name="email">
  </div>
      <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number"name="mobile">
     </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div> 
  </body>
</html>