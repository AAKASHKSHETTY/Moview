<?php

session_start();

if($_SESSION['loggedin']!=true)
{
    header("location:index.php");
}

?>