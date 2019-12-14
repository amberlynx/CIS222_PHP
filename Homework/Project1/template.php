<?php
/**

Project 1 - template.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the code for the project's template.
Last Edited: 10.15.19

 **/
$siteName = "Eve's Technology";
$email = "serviceve@gmail.com";
$serviceNumber = "734-369-9999";
$contactInfo = "Contact us: ".$email." / ".$serviceNumber;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="styles.css">

        <title>Eve's Technology</title>
    </head>

    <header>
        <nav class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="catalog.php">Our Catalog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <!--<li><a href="funding.php">Support Us</a></li>-->
            </ul>
        </nav>

        <div id="banner">
            <div id="logo"><a href="index.php"><img src="earth.jpg" alt="logo"></a></div>
        </div>
    </header>

    <footer>
        <?php echo $siteName.' -- Copyright '.date('y').'<br>'.$contactInfo; ?>
    </footer>
</html>