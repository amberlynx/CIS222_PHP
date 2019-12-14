<?php
/**

Project 2 - contact.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/contact.php
Description: This is the contact page so that customers can send inquiries.
Last Edited: 12.7.19

 **/
include_once('template.php');
require('dbConnect.php');
?>
<html>
    <h4 class="text-center">Need to get a hold of us?</h4>
    <h6 class="text-center">Please submit your information below </h6>

    <form action="contact.php" method="post">
        <fieldset class="contactInfo"><br>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="MI">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="USA">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="reason">Reason for contacting</label>
                    <textarea class="form-control" rows="4" cols="50" name="reason" id="reason" placeholder="Enter text here"></textarea>
                </div>
            <center><input class="btn btn-outline-success" type="submit" value="Submit" id="submit"></center>
        </fieldset>
    </form>
</html>
<?php
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['state']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['reason']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    $connect->query("INSERT into Tickets(firstname, lastname, state, country, phone, email, reason, dateCreated) VALUES ('$firstname', '$lastname', '$state', '$country', '$phone', '$email', '$reason', NOW())");

    if (!$connect) { echo "The information has not been submitted. Please try again later."; }
    else { echo "<strong>   ".$firstname.", your ticket has been submitted. Thank you!</strong>"; }
} $connect->close();
include_once('footer.php');