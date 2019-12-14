<?php
 include_once('register.php');
$mysqli = new mysqli("localhost", "root", "Aakash@369", "registration");
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if (empty($_POST["name"])&&empty($_POST["username"])&&empty($_POST["email"])&&empty($_POST["password"]))
{
    
}

else 
{
    $name = $mysqli->real_escape_string($_REQUEST['name']);
$username = $mysqli->real_escape_string($_REQUEST['username']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
 
    
$sql = "INSERT INTO regi (fname,urname,email,passwd) VALUES ('$name', '$username', '$email','$password')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
}

$mysqli->close();
?>