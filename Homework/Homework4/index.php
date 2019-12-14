<?php
/**

Homework 4 - index.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Homework4/index.php
Description: This is the home page or index of my homework 4.
Last Edited: 10.15.19

 **/
include_once('template.php');
require('dbConnect.php');
?>
<html>
<body>
<p>
    <?php

    $qrySelect = 'SELECT * FROM homework4;';

    $result = $connect->query($qrySelect);
    if ($result->num_rows > 0)
    {
        echo "<table><tr><th>ID</th><th>Data</th></tr>";

        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>"
                . $row["ID"]. "</td><td><a href='describeTable.php'>Update</a>\t"
                . $row["Data"]. "</td></tr>";
        }

        echo "</table>";
    }
    else
    {
        echo "Selection unavailable.";
    }
    $connect->close();
    ?>
</p>

</body>

</html>