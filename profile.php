<?php
include("login.php");
$con=new mysqli("localhost","root","Aakash@369","registration");
    $username = $_SESSION['username'];
$query = mysqli_query($con,"SELECT * FROM `regi` WHERE `urname` = '$username'");
$row = mysqli_fetch_array($query);


$fname = $row['fname'];
$username = $row['urname'];
$email = $row['email'];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body
{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(profile.jpg);
    background-size: cover;
    background-position: center;
         background-repeat: no-repeat;
      background-attachment: fixed;
    color: #fff !important;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0.2, 0.2, 0.2, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
    background: rgba(0,0,0,0.5);
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Profile</h2>

<div class="card">
  <img src="profile.png" alt="John" style="width:100%">
  <h1><?php echo $fname;  ?></h1>
  <p class="title"><?php echo $_SESSION['username']; ?></p>
  <p><?php echo $email;  ?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

</body>
</html>
