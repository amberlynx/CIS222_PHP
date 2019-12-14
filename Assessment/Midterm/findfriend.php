<?php
/**

Midterm - findfriend.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/findfriend.php
Description: This is the extra credit portion that will do a search in the database for an animal based off of certain conditions.
Created: 10.14.19
Last Edited: 10.15.19

 **/
include_once('template.php');
require('dbConnect.php');
?>
<html>

    <body>
        <h4>Please start search by entering a breed</h4>

    <form action="findfriend.php" method="post">
        <fieldset class="find">
            <legend> Search the database: </legend>

            <p>
                <label for="breed"> Breed:
                    <input type="text" name="breed" id="breed" placeholder="Dog">
                </label><br>
            </p>

        <fieldset class="btnSelection">
            <input type="submit" value="Search" id="submit">
            <a href="index.php" id="homePage" class="button">Back</a>
        </fieldset>

        <?php
            if(isset($_POST['breed']))
            {
                $breed = $_POST['breed'];

                $result = $connect->query("SELECT FROM midterm_animals WHERE breed = ('$breed')");

                if ($result > 0)
                {
                    echo "<table><tr><th>ID</th><th>Pet Name</th><th>Type</th><th>Breed</th><th>Checkin Date</th><th>Checkout Date</th><th>Phone</th><th>Email</th><th>Notes</th></tr>";

                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>"
                            . $row["animalID"]. "</td><td>"
                            . $row["animalName"]. "</td><td>"
                            . $row["animalType"]. "</td><td>"
                            . $row["breed"]. "</td><td>"
                            . $row["checkin"]. "</td><td>"
                            . $row["checkout"]. "</td><td>"
                            . $row["phone"]. "</td><td>"
                            . $row["email"]. "</td><td>"
                            . $row["notes"]. "</td></tr>";
                    }

                    echo "</table>";
                }
                else
                {
                    echo "Selection unavailable.";
                }
            } $connect->close();
        ?>
    </form>
    </body>

</html>

