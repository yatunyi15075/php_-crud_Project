<?php
include 'connect.php';
?>


<!doctype html>
<html>
    <head>
        <title> DashBoard </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    </head>
    <body>
        <div class= "container">
            <button class= "btn btn-primary"><a href ="user.php"
            class="text-light"> Add User </a>
            </button>


 <table class="table">
  <thead>
    <tr>
      <th scope="col">S1 No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql = "Select * from `crud` ";
$result= mysqli_query($con, $sql);
if($result){
    while($row = mysqli_fetch_asssoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
       <td>'.$password.'</td>
    </tr>';
    }
}


?>

  </tbody>
</table>


        </div>
    </body>
</html>
