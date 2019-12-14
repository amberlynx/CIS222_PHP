<?php
/**

Midterm - template.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the template code to do a page setup for the animal themed midterm.
Created: 10.14.19
Last Edited: 10.15.19

 **/
$site = "Animal Midterm";
$email = "WeLoveAnimals@gmail.com";
$serviceNumber = "734-547-7049";
$contactInfo = "Contact us: ".$email." / ".$serviceNumber;
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="styles.css">

        <title>The Pet Tree</title>
    </head>

    <header>
        <nav class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="insertfriend.php">Checkin</a></li>
                <li><a href="updatefriend.php">Update Pet</a></li>
                <li><a href="removefriend.php">Checkout</a></li>
                <li><a href="findfriend.php">Find Pet</a></li>
            </ul>
        </nav>

        <div id="banner">
            <div id="logo"><a href="index.php"><img src="cover.png" alt="cover photo of a bunch of animals"></a></div>
        </div>
    </header>

    <footer>

        <?php echo $site.' -- Copyright '.date('y').'<br>'.$contactInfo; ?>

    </footer>
</html>