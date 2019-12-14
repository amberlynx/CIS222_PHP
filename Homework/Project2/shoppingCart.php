<?php
/**

Project 2 - shoppingCart.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/shoppingCart.php
Description: This is the shopping cart functionality.
Last Edited: 12.14.19

// $_SESSION["cart"] holds the cart array
**/
include_once('template.php');
require('dbConnect.php');
session_start();
$sid = session_id();
$cart=""; $output="";

?>
<!DOCTYPE html>
<html lang="en"><br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Product</div></th>
                    <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Description</div></th>
                    <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Unit Price</div></th>
                    <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Quantity</div></th>
                    <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Remove</div></th>
                </tr>
            </thead>
    <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart']) < 1) { $output = "</table></div><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h2>Your shopping cart is empty.</h2></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; } ?>
    <tbody>
        <tr>
            <?php
                if(isset($_SESSION['cart'])) { 
                    for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
                        if (isset($_POST['pid'])) { $pid = $_POST['pid']; }
                        $query = "SELECT * FROM Products WHERE productID='$pid' LIMIT 1";
                        $result = $connect->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>"
                                    .$row['picture'] . "&nbsp;&nbsp;&nbsp;"
                                    .$row['pname']
                                    .$row['description'] . "</td><td>"
                                    .$row['uprice'] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                    .$row['quantity'] . "</td></tr>";
                                    echo "<td class=\"border-0 align-middle\"><a href=\"#\" class=\"text-dark\"><i class=\"fa fa-trash\"></i></a></td>";
                            }
                    } else { echo "ERROR - Problem with database"; } }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="checkout.php" method="post">
        <center><input class="btn btn-outline-success" type="submit" value="Checkout" id="submit"></center>
        <button class="btn btn-sm btn-outline-white my-0" type="button"><a href="addCart.php?empty=y">Empty Cart</a></button>
    </form>
</html>
    <?php
                } // End else statement: Make checkbox only visible when cart has items
echo $output; 
include_once('footer.php');