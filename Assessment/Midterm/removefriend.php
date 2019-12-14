<?php
/**

Midterm - removefriend.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/removefriend.php
Description: This is the page will remove a row from the database.
Created: 10.14.19
Last Edited: 10.15.19

 **/
include_once('template.php');
require('dbConnect.php');

$animalName = "";
$checkoutDate = "";

?>
<html>

    <body>
    <h4>This is a checkout form for your companion</h4>

    <form action="removefriend.php" method="post">
        <fieldset class="removal">
            <legend> Enter in the name of the pet that you would like to check out: </legend>

            <p>
                <label for="animalName"> Pet Name:
                    <input type="text" name="animalName" id="animalName" placeholder="Moose">
                </label><br>

            <p>
                <label for="checkoutDate"> Date of Checkout:
                    <input type="datetime-local" name="checkoutDate" id="checkoutDate" placeholder="10/10/2019">
                </label><br><br>

                <label for="phone"> Please enter phone number for verification:
                    <input type="text" name="phone" id="phone" placeholder="000-000-0000">
                </label>
            </p><br>

            <input type="submit" value="Checkout" id="submit">
            <a href="index.php" id="homePage" class="button">Back</a>
        </fieldset>
    </form>

    <p>
        <?php
        if(isset($_POST['animalName']) && isset($_POST['checkoutDate']))
        {
            $animalName = $_POST['animalName'];
            $checkoutDate = $_POST['checkoutDate'];

            $connect->query("UPDATE  `midterm_animals` SET `checkoutDate` = '$checkoutDate' WHERE   `animalName` = ('$animalName')");

            if (!$connect)
            {
                echo "The information has not been submitted.";
            }
            else
            {
                echo $animalName . " has been checked out. Thank you for visiting the Pet Tree!";
            }
        } $connect->close();
        ?>
    </p>
    </body>

</html>

