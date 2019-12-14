<?php
/**

Homework 4 - index.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the template of homework 4.
Last Edited: 10.15.19

 **/
$site = "Homework 4";
$email = "thisishw4@gmail.com";
$serviceNumber = "734-324-6344";
$contactInfo = "Contact us: ".$email." / ".$serviceNumber;
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="styles.css">

        <title>Homework 4</title>
    </head>

    <header>
        <nav class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="describeTable.php">Describe</a></li>
            </ul>
        </nav>
    </header>

    <footer>
        <?php echo $site.' -- Copyright '.date('y').'<br>'.$contactInfo; ?>
    </footer>
</html>