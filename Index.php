<?php include('login.php') ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <form class="loginbox" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <img src="login1.png" class="login">
        <h1>Login</h1>
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <span class="help-block"><?php echo $username_err; ?></span></div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
        <span class="help-block"><?php echo $password_err; ?></span></div>
            <input type="submit" name="Login">
            <a href="forpas.php">Forgot Password?</a><br>
            <a href="register.php">New to Moview?</a>
    </form>
</body>
</head>
</html>