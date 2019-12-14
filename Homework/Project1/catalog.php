<?php
/**

Project 1 - catalog.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project1/catalog.php
Description: This is the catalog page for selling products at Eve's Tech.
Last Edited: 10.16.19

 **/
include_once('template.php');
require('dbConnect.php');


$qrySelect = 'SELECT * FROM Product;';

$result = $connect->query($qrySelect);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Product Name</th><th>Price</th><th>Quantity</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>"
            . $row["productID"] . "</td><td>"
            . $row["pname"] . "</td><td>$"
            . $row["uprice"] . "</td><td>"
            . $row["quantity"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Selection unavailable.";
}
$connect->close();
?>
<html>
    <body>
    <table>
        <tr>
            <td>
                <div id="logo"><a href="holowatchPage.php"><img src="holowatch.JPG" alt="logo"></a></div>
            </td><td>
                The holowatch, integrated with mei software, will be the life task manager you've been looking for!
            </td>
        </tr>
        <tr>
            <td>
                <div id="logo"><a href="meiPage.php"><img src="meimaybe.JPG" alt="logo"></a></div>
            </td><td>
                The mei home system can help manage your tasks and make life easier while keeping your data private.
            </td>
        </tr>
        <tr>
            <td>
                <div id="logo"><a href="vrcontactsPage.php"><img src="vrcontacts.JPG" alt="logo"></a></div>
            </td><td>
                Want to see the world, thats beauty is often taken for granted, but don't want to wear bulky glasses?<br>
                We now offer vrContacts, contacts that you can see a whole new prespective to the world in or maybe you want
                to be the creator of your own world.. We have that option available!
            </td>
        </tr>
    </table>
    </body>
</html>