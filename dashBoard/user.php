<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="insert into `crud` (name, email, mobile, password)
    values('$name', '$email', '$mobile', '$password')";
    $result=mysqli_query($con, $sql);
    if($result){
       header('location:display.php');
    }else {
        die(mysqli_query($con));
    }
    

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> DashBoard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>
  <body>
    <div class= "container">
        <form method= "post">
  <div class="row mb-3">
    <label> Name</label>
    <input type= "text" class= " form-control" 
    placeholder= "Enter your Name" name= "name" autocomplete = "off">
   </div>

    <div class="row mb-3">
    <label> Email </label>
    <input type= "email" class= " form-control" 
    placeholder= "Enter your email" name= "email" autocomplete= "off">
   </div>

    <div class="row mb-3">
    <label> Mobile</label>
    <input type= "text" class= " form-control" 
    placeholder= "Enter your Mobile" name= "mobile" autocomplete= "off">
   </div>

    <div class="row mb-3">
    <label> Password</label>
    <input type= "text" class= " form-control" 
    placeholder= "Enter your password" name= "password" autocomplete= "off">
   </div>

  <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
</form>
    </div>
    
</body>
</html>