<?php
/**

Project 2 - template.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the code for the project's template.
Last Edited: 12.7.19

 **/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>EveTech</title>
    </head>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">EveTech</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="catalog.php">Our Catalog</a></li>
                <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
            <ul>
                <div class="float-right">
                    <?php
                        if(!isset($_SESSION['customerID'])) {
                            ?><button class="btn btn-sm btn-outline-white my-0"><a href="login.php">Login</a></button><?php
                        } else { ?><button class="btn btn-sm btn-outline-white my-0"><a href="logout.php">Logout</a></button><?php }
                    ?>
                    <button class="btn btn-sm btn-outline-white my-0" type="button"><a href="shoppingCart.php">Cart</a></button>
                </div>
            </ul>
        </nav>
    </header>
</html>