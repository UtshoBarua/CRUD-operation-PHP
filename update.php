<?php
include 'connection.php';
$id = $_GET['updateid'];
$sql = "select*from `crud` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
$email =$row['email'];
$mobile =$row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile =$_POST['mobile'];
  $password =$_POST['password'];


  $sql ="update `crud` set id=$id,name ='$name', mobile='$mobile', email='$email', password='$password' where id=$id"; 
  $result = mysqli_query($con,$sql);
  if($result){
   // echo "data updated sucessfull"; 
    header('location:display.php');
  }
  else {
    die(mysqli_error($con)); 
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" id="InputName" name="name" value=<?php echo $name ?> >
  </div>


  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email"  class="form-control"  id="InputEmail1" name="email" value=<?php echo $email ?>>
  </div>

  <div class="mb-3">
    <label class="form-label">Phone Number</label>
    <input type="text"  class="form-control" id="InputPhone" name="mobile" value=<?php echo $mobile ?>>
  </div>


  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password"  class="form-control"  id="InputPassword" name="password"value=<?php echo $password ?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
  </div>
  
  
  </body>
</html>
