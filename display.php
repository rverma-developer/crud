<?php
include 'connect.php';
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operations</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>

    </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php

   $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       while($row=mysqli_fetch_assoc($result))
       {
        //$row=mysqli_fetch_assoc($result);
        //echo $row['Name'];
       // $row=mysqli_fetch_assoc($result);
        //echo $row['Name'];
        $id=$row['Id'];
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];
echo'<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$mobile.'</td>
<td>'.$password.'</td>
<td>
<button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"  class="text-light">Delete</a></button>
</td>
</tr>';
       }
    }
    ?>

  </tbody>
</table>
    </div>
</body>
</html>