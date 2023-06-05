<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `crud01` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result); 
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sql="update `crud01` set id=$id,name='$name',email='$email',mobile='$mobile' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "update successfully";
       header('location:display.php');
    }else{
        die (mysqli_error($con));
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
     <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php  echo $name;?>>
  </div>
  <div class="form-group">
    <label>Email</label>
     <input type="Email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php  echo $email;?>
  </div>
  <div class="form-group">
    <label>Mobile</label>
     <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php  echo $mobile;?>
  </div>
<button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
 </div>
</body>
</html>