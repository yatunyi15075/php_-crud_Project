<?php 
include 'connect.php';
$id=$_GET[ 'updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con, $sql);  
$row= mysqli_fetch_asssoc($result);
$name = $row['name'];
$email= $row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql= "update `crud` set id=$id, name= '$name', 
    email= '$email', mobile= '$mobile' , password= '$password' 
    where id=$id";

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
    placeholder= "Enter your Name" name= "name" autocomplete = "off"
     value= <?php echo $name; ?>>
   </div>

    <div class="row mb-3">
    <label> Email </label>
    <input type= "email" class= " form-control" 
    placeholder= "Enter your email" name= "email" autocomplete= "off"
     value = <?php echo $email ?>>
   </div>

    <div class="row mb-3">
    <label> Mobile</label>
    <input type= "text" class= " form-control" 
    placeholder= "Enter your Mobile" name= "mobile" autocomplete= "off"
     value = <?php echo $mobile;?>>
   </div>

    <div class="row mb-3">
    <label> Password</label>
    <input type= "text" class= " form-control" 
    placeholder= "Enter your password" name= "password" autocomplete= "off"
    value= <?php echo $password?>>
   </div>

  <button type="submit" class="btn btn-primary" name = "submit" > Update</button>
</form>
    </div>
    
</body>
</html>