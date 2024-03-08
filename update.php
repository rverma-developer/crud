<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
$sql="update `crud` set Id=$id,Name='$name',Email='$email',Mobile='$mobile',Password='$password'
where id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
  //echo "Updated succcesfully";
  header('location:display.php');
}
else
{
echo "Data not inserted";
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
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <title>CRUD operation</title>
    </head>
  <body>
<div class="container my-5">
<form method="post">
  <div class="form-control">
    <label>Name<br/></label>
    <input type="text" class="form-control" placeholder="Enter your Name"
     name="name" autocomplete="off" value=<?php echo $name;?>>
</div>
<div class="form-control">
    <label>Email </label><br/>
    <input type="email" class="form-control" placeholder="Enter your Email"
     name="email" autocomplete="off" value=<?php echo $email;?>>
</div>
<div class="form-control">
    <label>Mobile</label><br/>
    <input type="number" class="form-control" placeholder="Enter your Mobile number"
     name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
</div>
<div class="form-control">
    <label>Password</label><br/>
    <input type="password" class="form-control" placeholder="Enter your Password"
     name="password"autocomplete="off" value=<?php echo $password;?>>
</div><br/>

<button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>
</div>
  </body>
</html>