<?php 
include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
   <button class="btn btn-primary"><a href="user.php" class="text-light">ADD USER</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl_no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `crud01`";
    $result=mysqli_query($con,$sql);
    
    if($result) 
    {
        while($row=mysqli_fetch_assoc($result))
        {
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        echo'
        <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">delete</a></button>
      </td>
    </tr> ';
       }
}



    ?>
    
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
</body>
</html>