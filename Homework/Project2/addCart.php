<?php
/**

Project 2 - addCart.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/addCart.php
Description: This will add products to the cart and insert them into the table if the user is checking out.
Created: 12.10.19
Last Edited: 12.14.19

 **/
include_once('template.php');
require('dbConnect.php');
session_start();
$sid = session_id();
$connect='';

if(isset($_SESSION['customerID'])) { $customerID = $_SESSION['customerID']; }
else { $customerID = 0; } // Guest

$quantity = $_GET['quantity'];
$pid = $_GET['pid'];
$orderConfirm = false;
$total = 0;

$_SESSION['cart'] = array(productID => $pid, quantity => $quantity);

if($_GET['checkout'] == 't') {
    try {
        $updateQuantity = $connect->query("UPDATE Product SET quantity = quantity-'$quantity' WHERE productID = '$pid'");
        if(!$updateQuantity) die($mysql->error);
        
        $createOrder = $connect->query("INSERT into Order(customerID, dateCreated, orderTotal) VALUES ('$customerID', NOW(), '$total')");
        if(!$createOrder) die($mysql->error);
        
        $orderConfirm = true;
    } catch (Exception $e) { echo "ERROR - ".$e; }

    if($orderConfirm == true) { echo "Your order has been placed. Thank you for supporting EveTech!"; }
    else { echo "There was a problem processing your order."; }
} 
else if($_GET['empty'] == 'y') {
    $_SESSION['cart'] = 0;
} else { header("Refresh 10; Location: catalog.php"); }
$connect->close();