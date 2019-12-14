<?php include('mysql.php') ?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: darkorange;}
</style>
<title>Registration Page Design</title>    
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
    <div class="row">
    <div class="col-md-10 offset=md-1">
    <div class="row">
    <div class="col-md-5 register-left">
        <h3>Join Us</h3>
        <p>Write and read movie reviews</p>
        <button type="button" class="btn btn-primary" onclick="window.location.href = 'about.html';">About Us</button>
</div>
        
<?php
        
        
        $emailErr="";
        $nameErr="";
        $userErr="";
        $passErr="";
        $valid= false;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
        if (empty($_POST["name"])) {
            $valid=false;
        $nameErr = "^Name is required";
        }   
        else 
        {
            $valid=true;
        if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) 
        {
         $valid=false;   
        $nameErr = "^Only letters and white space allowed";
        }
        }
            if (empty($_POST["username"])) {
            $valid=false;
        $userErr = "^Username is required";
        }   
        if (empty($_POST["email"])) {
                $valid=false;
        $emailErr = "^Email is required";   
        }
        else 
        {
            $valid=true;
            $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $valid=false;
        $emailErr = "^Invalid email format"; 
        }
        }
            if (empty($_POST["password"])) {
            $valid=false;
        $passErr = "^Password is required";
        }   
            if($valid)
            {
                echo "<script>window.location = 'index.php'</script>";
                exit();
            }
        }
                    
            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;   
            }

?>
<div class="col-md-7 register-right">
    <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2>Register Now</h2>
        <div class="register-form">
        <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name">
            <span class="error"><?php echo $nameErr;?></span>
        </div>
        <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="error"><?php echo $userErr;?></span>
        </div>
        <div class="form-group">
        <input type="text"  name="email" class="form-control" placeholder="Email">
            <span class="error"><?php echo $emailErr;?></span>
        </div>
        <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="error"><?php echo $passErr;?></span>
        </div>
             <input type="submit" class="btn btn-primary" name="Login">
        </div>
    </form>
    </div> 
    </div>  
    </div>
    </div>
    </div>
    </body>
</html>
