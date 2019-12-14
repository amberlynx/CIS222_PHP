<?php
/**

Project 2 - signup.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/signup.php
Description: This is the signup page where a user can make an account.
Created: 12.3.19
Last Edited: 12.10.19

**/
session_start();
$sid = session_id();
include_once('template.php');
require('dbConnect.php');
if(isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['ps']))
{
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ps = SHA1($_POST['ps']);

    $connect->query("INSERT into Customer(username, firstname, lastname, gender, email, phone, ps, dateJoined) VALUES ('$username', '$firstname', '$lastname', '$gender', '$email', '$phone', '$ps', NOW())");
    $customerID = $connect->query("SELECT customerID FROM Customer WHERE username='$username");
    var_dump($customerID);
    if($ps = $_POST['psCheck']) {
        echo "Passwords match!<br>";
        if (!$connect) { echo "Your account has not been created, there was a problem connecting to the database.<br>"; }
        else { 
            if(isset($customerID)) { $_SESSION['customerID'] = $customerID; }
            else { echo "ERROR - Could not store customerID"; }
            $_SESSION['username'] = $username;
            echo $username . ", your account has been created. Welcome to Envunity!<br>Redirecting to homepage.."; 
            header('Refresh: 10; URL=https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/index.php');
        }
    } else { echo "Password did not match, please try again."; }
} 
?>
<html lang="en">
    <h4 class="text-center">Create an account</h4>
    <h6 class="text-center">Please submit your information below </h6>
    
    <form method="post">
        <div class="form-group">
            <label for="username">Create a username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </div>
        
        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
        </div>
        
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
        </div>
        
        <label class="form-check-label" for="gender">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="genderF" value="f">
            <label class="form-check-label" for="genderF">Female</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="genderM" value="m">
            <label class="form-check-label" for="genderM">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="genderNA" value="na">
            <label class="form-check-label" for="genderNA">Prefer not to say</label>
        </div><br>
        
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
        </div>
        
        <div class="form-group">
            <label for="ps">Create a password</label>
            <input type="password" class="form-control" name="ps" id="ps" placeholder="Password" required>
        </div>
        
        <div class="form-group">
            <label for="psCheck">Re-enter your password for verification</label>
            <input type="password" class="form-control" name="psCheck" id="psCheck" placeholder="Password" required>
        </div>
        
        <center><input class="btn btn-outline-success" type="submit" value="Create Account" id="submit"></center>
    </form>
</html>
<?php
include_once('footer.php');
$connect->close();