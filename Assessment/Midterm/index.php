<?php
/**

Midterm - index.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Assessment/Midterm/
Description: This is the home page or index of my version of the animal midterm.
Created: 10.14.19
Last Edited: 10.15.19
Grade: 110 / 100

 **/
include_once('template.php');
require('dbConnect.php');
$count = 0;
?>
<html>

    <body>

        <p>
            Hello, we welcome you and your companion to the Pet Tree.<br>
            We offer a variety of services in our facility, all you need to do is check in your pet!<br>
            We have a few pages on our site, this is our home page, then a insert page where you can check<br>
            in your pet, a page for updating your companion's information, a checkout page, and finally<br>
            a find page where you can search our database for information about your pet.<br><br>
            We hope you and your companion enjoy our services, thank you for choosing the Pet Tree!
        </p>
        <h2>These are the animals we currently have in our care</h2>
        <p>
            <?php

            $qrySelect = 'SELECT * FROM midterm_animals;';

            $result = $connect->query($qrySelect);
            if ($result->num_rows > 0)
            {
                echo "<table><tr><th>ID</th><th>Pet Name</th><th>Type</th><th>Breed</th><th>Checkin Date</th></tr>";

                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>"
                        . $row["animalID"]. "</td><td><a href='updatefriend.php'>Update</a>\t"
                        . $row["animalName"]. "</td><td>"
                        . $row["animalType"]. "</td><td>"
                        . $row["breed"]. "</td><td>"
                        . $row["checkinDate"]. "</td></tr>";
                    ++$count;
                }

                echo "</table>";
            }
            else
            {
                echo "Selection unavailable.";
            }
            $connect->close();
            ?><br>
                We are currently holding <?php echo $count; ?> animals at our facility.
        </p>

    </body>

</html>
