<?php
/**

Project 2 - checkout.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/checkout.php
Description: This is the checkout form and functionality.
Last Edited: 12.3.19

**/
include_once('template.php');
require('dbConnect.php');
$subtotal=0; $shipping=0; $tax=0;
?>
<html lang="en">
    <h4 class="text-center">Checkout</h4>
    <h6 class="text-center">Please submit your information below </h6>

    <label>Subtotal: $<?php $subtotal ?></label><br>
    <label>Shipping: $<?php $shipping ?></label><br> <!-- Rate: $5 per item -->
    <label>Tax: $<?php $tax ?></label><br>
    <label>Total: $<?php $total ?></label><br><br>
    
    <form action="addCart.php?checkout=t&pid=1&quantity=$quantity" method="post">
        <br>
        <h5>Customer Information</h5>
        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First" required>
        </div>
        <div class="form-group">
            <label for="middlename">Middle Name</label>
            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
        </div>
        <br>
        <h5>Shipping Information</h5>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City">
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state" id="state" placeholder="State">
        </div>
        <div class="form-group">
            <label for="zipcode">Zipcode</label>
            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zipcode">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Country">
        </div>
        <br>
        <h5>Payment Method</h5>
        <div class="form-group">
            <label for="cardName">Name on Card</label>
            <input type="text" class="form-control" name="cardName" id="cardName" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="Number">
        </div>
        <div class="form-group">
            <label for="expDate">Expiration date</label>
            <input type="date" class="form-control" name="expDate" id="expDate" placeholder="Expiration">
        </div>
        <div class="form-group">
            <label for="ccv">CCV</label>
            <input type="text" class="form-control" name="ccv" id="ccv" placeholder="CCV">
        </div>
        <center><input class="btn btn-outline-success" type="submit" value="Checkout" id="submit"></center>
    </form>
</html>
<?php
include_once('footer.php');
if(isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zipcode']) && isset($_POST['country']) && isset($_POST['cardName']) && isset($_POST['cardNumber']) && isset($_POST['expDate']) && isset($_POST['ccv']))
{
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $expDate = $_POST['expDate'];
    $ccv = $_POST['ccv'];
    $customerID = $_SESSION['customerID'];

    $connect->query("INSERT INTO order(customerID, firstname, middlename, lastname, email, phone, address, city, state, zipcode, country, cardName, cardNumber, expDate, ccv, orderDate) VALUES ('$customerID', '$firstname', '$middlename', '$lastname', '$email', '$phone', '$address', '$city', '$state', '$zipcode', '$country', '$cardName', '$cardNumber', '$middleName', '$expDate', '$ccv', NOW())");

    if (!$connect) { echo "The order has not been submitted. Please try again."; }
    else { echo "Order successful! Your items are on their way."; }
}
else { echo "Please enter the necessary fields.";}
$connect->close();

// On submission:
    // Clear the shopping cart
