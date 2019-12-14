<?php
/*
    Project 2 - login.php
    Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
    Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Project2/login.php
    Description: This is the login page for project 2.
    Created: 11.23.19
    Last Edited: 12.14.19
*/
require('dbConnect.php');
session_start();
$sid = session_id();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Login</title>
    </head>

    <body>
        <br><br><br><br><br><br><br><br><br><br>
        <center>
            <div class="row h-100 justify-content-center align-items-center col-10 col-md-8 col-lg-6">
                <form method="post">
                    <label for="username"><b>Username &nbsp;&nbsp;</b></label><input type="text" placeholder="Username" name="username" id="username" required>
                    <br><br>
                    <label for="ps"><b>Password  &nbsp;&nbsp;</b></label><input type="password" placeholder="Password" name="ps" id="ps" required>
                    <br><br>
                    <center><a href="signup.php">New user? Create Account!</a></center><br>
                    <center><input class="btn btn-outline-success" type="submit" value="Login" id="login"></center><br>
                    <center><a class="btn btn-outline-light" href="index.php" id="btnBack">Back to homepage</a></center>
                </form>
            </div>
        </center>
    </body>
</html>
<?php
if(isset($_POST['username']) && isset($_POST['ps']))
{
    $username = $_POST['username'];
    $ps = $_POST['ps'];
    
    $query = "SELECT customerID FROM Customer WHERE username='$username' AND ps=SHA1('$ps')";
    $result = $connect->query($query);
    
    if(!empty($result))
    {
        if($result && $result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION["customerID"] = $result;
            echo "<p class=\"text-center\">Login successful!<br>Redirecting to homepage..</p>";
            header("Refresh: 7; Location: index.php?session='$sid'");
       } else { echo '<p class=\"text-center\">Incorrect login information. Please try again.</p>'; }
    } else { echo "ERROR DATABASE - There was an error while getting the results."; }
}