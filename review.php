<?php include('revsql.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Write your Review</title>
        <link rel="stylesheet" type="text/css" href="review.css">
        </head>
    
    <body>
        <div class="contact-title">
            <h1>Tell us More</h1>
            <h2>Good or Bad!</h2>
        </div>
        <div class="contact-form">
        <form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input name="Movie" type="text" class="form-control" placeholder="Movie Name" required><br>
            <textarea name="Review" class="form-control" placeholder="Your Review" rows="4" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND REVIEW">
            </form>
        </div>
    </body>
    </html>