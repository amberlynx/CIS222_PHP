<?php
/**

Project 2 - index.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/index.php
Description: This is the index page, the only page the user should have to type in to get to the site.
Last Edited: 12.10.19

 **/
include_once('template.php');
?>
<html>
    <body><br>
        <center><a href="index.php"><img class="img-fluid img-thumbnail" src="Images/earth.jpg" alt="a picture of the earth"></a></center><br>
        <h1 class="text-center">Welcome to EveTech!</h1>
        <h3 class="text-center text-success">The future starts here.</h3><br><br>
        <p class="text-center">This website was created to reach out to our supporters and sell products for EveTech.
        <br>We are a company aimed at using technical solutions to solve real world problems.
        </p><br>
        
        <div class="border border-success"><br>
            <h5 class="text-center">Want to browse our products?</h5>
            <center><a class="btn btn-outline-success" href="catalog.php" role="button">Click me!</a></center><br>
        </div><br><br>
        <p class="text-center">You can view your cart with the <a href="shoppingCart.php">cart</a> link next to the <a href="login.php">login</a>
           button where you can login or <a href="signup.php">signup</a> if you don't yet have an account.<br> If you already added
           things to your cart and you want to <a href="checkout.php">checkout</a> you can click this link.<br>
           We have a <a href="contact.php">support</a> page if you need to contact us or want to submit a ticket, 
           someone will get back with you as soon as possible to solve the issue.<br>
        <br><br>Please enjoy our site and have fun browsing EveTech!</p><br>
    </body>
    <?php include_once('footer.php'); ?>
</html>
