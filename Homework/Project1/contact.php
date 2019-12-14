<?php
/**

Project 1 - contact.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project1/contact.php
Description: This is the contact page so that customers can send inquiries.
Last Edited: 10.17.19

 **/
include_once('template.php');
require('dbConnect.php');

$name = "";
$gender = "";
$address = "";
$city = "";
$zip = 0;
$state = "";
$country = "";
$phone = "";
$email = "";
$notes = "";

//if(isset($_POST['dateCreated']))
//{
    //$dateCreated = $_POST['dateCreated'];
//};
?>
<html>
    <h4>Need to get a hold of us?</h4>
    <p>Please submit your information below: </p>

    <form action="contact.php" method="post">
        <fieldset class="contactInfo">
            <legend> Contact Information </legend>
            
            <p>
                <label for="name"> Full Name:
                    <input type="text" name="name" id="name" placeholder="Jane Doe">
                </label>
            </p>
            
            <p>
                <label for="gender">Gender: </label>
                <input type="radio" name="gender" value="f">Female</input>
                <input type="radio" name="gender" value="m">Male</input>
                <input type="radio" name="gender" value="na">Prefer not to say</input>
            </p>
            
            <p>
                <label for="address"> Address:
                    <input type="text" name="address" id="address" placeholder="0000 Exmp Rd">
                </label>
                
                <label for="city"> City:
                    <input type="text" name="city" id="city" placeholder="Taylor">
                </label>
                
                <label for="zip"> Zipcode:
                    <input type="number" name="zip" id="zip" placeholder="48180">
                </label>
            </p>
            
            <p>
                <label for="state"> State:
                    <input type="text" name="state" id="state" placeholder="MI">
                </label>
                
                <label for="country"> Country:
                    <input type="text" name="country" id="country" placeholder="USA">
                </label>
            </p><br>
            
            <p>
                <label for="phone"> Phone Number:
                    <input type="text" name="phone" id="phone" placeholder="000-000-0000">
                </label>
                
                <label for="email"> Email:
                    <input type="email" name="email" id="email" placeholder="exmp@example.com">
                </label>
            </p><br>
            
            <p>
                <label for="notes"> Anything you'd like to add?
                    <input type="text" name="notes" id="notes" placeholder="...">
                </label>
            </p>
        
            <!--<label for="dateCreated"> Today's Date:
                <input type="text" name="dateCreated" id="dateCreated" placeholder="10/01/2019">
            </label>-->

        <input type="submit" value="Submit" id="submit">
    </fieldset>

        <?php
        if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['zip']) && isset($_POST['state']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['notes']))
        {
            $name = $_POST['name'];
            $gender = $_REQUEST['gender'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $zip = $_POST['zip'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            $notes = $_POST['notes'];

            $connect->query("INSERT into Customer(customerName, Address, City, Zipcode, State, Country, PhoneNumber, Email, Notes) VALUES ('$name', '$address', '$city', '$zip', '$state', '$country', '$phone', '$email', '$notes')");

            if (!$connect) { echo "The information has not been submitted. Please try again."; }
            else
            {
                echo $name . ", your data has been submitted. Thank you!";
                ?><a href="index.php">Go to Homepage</a><?php
            }
        } $connect->close();
        ?>
    </form>
</html>