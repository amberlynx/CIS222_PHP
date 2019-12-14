<?php
/**
 *                           Homework Assignment 1: Contact.php
 *       Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Contact.php
 *       Email: alsakkinen@hawkmail.hfcc.edu
 *       Written by Amber Sakkinen, September 5th, 2019
 *       Last edited: September 9th, 2019
 * @grade   10 / 10
**/

$name = "Amber Sakkinen";
$email = "alsakkinen@hawkmail.hfcc.edu";
define('SLACK', "Amber");

// echo "testing.. is this thing on?";
?>

<html lang="en">
    <head>
        <title>Contact Amber</title>
    </head>
    <body>
        <h1>
            <?php echo $name; ?>
        </h1>
        <p>
            <?php
                echo "Email: ".$email."<br> Slack: ".SLACK;
                // Additional Contact Methods
                echo "<br> Gitlab: @alsakkinen"."<br> Cellphone: (734)626-8429";
            ?>
        </p>
    </body>
</html>
