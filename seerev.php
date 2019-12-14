<!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="seerev.css">
<body>  
<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Aakash@369');
define('DB_NAME', 'review');
 
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
$sql='SELECT * FROM rev';


if( !( $selectRes = mysqli_query($mysqli,$sql) ) ){
    echo 'Retrieval of data from Database Failed';
  }else{
 
    if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No REVIEWS Yet.</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){?>
    
    
    <div class="card">

  <div class="container">
    <h4><b><?php echo "<br<br><u>{$row['name']}</u><br>";?></b></h4>
    <p><?php echo "{$row['review']}<br><br>\n";?></p>
  </div>
</div>
    <?php     
        }
    }
}
    ?>

</body>
</head>
</html>