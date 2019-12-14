<?php
/**

Midterm - updatefriend.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/updatefriend.php
Description: This is the page where a user can update an animal in the database.
Created: 10.14.19
Last Edited: 10.15.19

 **/
include_once('template.php');
require('dbConnect.php');

$animalID = "";
$animalName = "";
$animalType = "";
$breed = "";
$checkinDate = "";
$phone = "";
$email = "";
$notes = "";
$result = null;
$qryInsert = "";
?>
<html>

<body>
<h4>Please update your pet's information below</h4>

<form action="insertfriend.php" method="post">
    <fieldset class="updateInfo">
        <legend> Update form for: </legend>

        <p>
            <label for="animalID"> First, please enter your pet's id:
                <input type="text" name="animalID" id="animalID" placeholder="000">
            </label><br><br>
                <h2>Below is the data available for editing:</h2>
            <label for="animalName"> Pet Name:
                <input type="text" name="animalName" id="animalName" placeholder="Moose">
            </label><br><br>

            <label for="animalType"> Type:
                <input type="text" name="animalType" id="animalType" placeholder="Dog">
            </label>

            <label for="breed"> Breed:
                <input type="text" name="breed" id="breed" placeholder="Husky">
            </label><br><br>

            <label for="checkinDate"> Date your companion was check in:
                <input type="date" name="checkinDate" id="checkinDate" placeholder="10/14/2019">
            </label><br><br><br>
        </p>

        <p>
            <label for="phone"> Phone Number:
                <input type="text" name="phone" id="phone" placeholder="000-000-0000">
            </label>

            <label for="email"> Email:
                <input type="email" name="email" id="email" placeholder="exmp@example.com">
            </label><br><br>

            <label for="notes"> Anything you'd like to add about caring for your pet?
                <input type="text" name="notes" id="notes" placeholder="...">
            </label>
        </p><br>

        <input type="submit" value="Submit" id="submit">
        <a href="index.php" id="homePage" class="button">Back</a>
    </fieldset>
    <?php

    if(isset($_POST['animalID']) && isset($_POST['animalName']) && isset($_POST['animalType']) && isset($_POST['breed']) && isset($_POST['checkinDate']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['notes']))
    {
        $animalID = $_POST['animalID'];
        $animalName = $_POST['animalName'];
        $animalType = $_POST['animalType'];
        $breed = $_POST['breed'];
        $checkinDate = $_POST['checkinDate'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $notes = $_POST['notes'];

        $connect->query("UPDATE `midterm_animals` SET `animalName, animalType, breed, checkinDate, phone, email, notes` = ('$animalName', '$animalType', '$breed', '$checkinDate', '$phone', '$email', '$notes') WHERE  `animalID` = '$animalID'");

        if (!$connect)
        {
            echo "The information has not been updated. Please try again.";
        }
        else
        {
            echo $animalName . "'s, data has been updated. Thank you!";
        }
    } $connect->close();
    ?>
</form>
</body>
</html>