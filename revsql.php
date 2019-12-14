<?php
$mysqli = new mysqli("localhost", "root", "Aakash@369", "review");
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
if (empty($_POST["Review"])) 
{
    
}
else
{
    $name = $mysqli->real_escape_string($_REQUEST['Movie']);
$review = $mysqli->real_escape_string($_REQUEST['Review']);
 
$sql = "INSERT INTO rev (name,review) VALUES ('$name','$review')";
if($mysqli->query($sql) === true){
    echo '<span style="color: darkorange;">Review inserted successfully.</span>';
    header("location:home.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
}

$mysqli->close();
?>