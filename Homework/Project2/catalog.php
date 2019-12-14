<?php
/**

Project 2 - catalog.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/catalog.php
Description: This is the catalog page for selling products at Eve's Tech.
Last Edited: 12.10.19

 **/
include_once('template.php');
require('dbConnect.php');

$query = 'SELECT * FROM Product;';
$result = $connect->query($query);
if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Product</div></th>
                        <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Price</div></th>
                        <th scope="col" class="border-0 bg-success"><div class="p-2 px-3 text-uppercase text-white">Quantity</div></th>
                    </tr>
                </thead><br>
                <tbody>
                    <?php
                        while ($row = $result->fetch_assoc()) {
                            $pid = $row['productID'];
                            $quantity = 1;
                            echo "<tr><td>"
                                .$row['picture'] . "&nbsp;&nbsp;&nbsp;"
                                .$row['pname'] . "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"productDetails.php?id=$pid\">View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class=\"btn btn-outline-success\" href=\"addCart.php?pid=$pid&quantity=$quantity&catalog=t\" role=\"button\">Add to Cart</a></td><td>&nbsp;&nbsp;$"
                                .$row['uprice'] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                .$row['quantity'] . "</td></tr>";
                        }
                    ?>
                </tbody>
            </table><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </html>
<?php
} else { echo "Selection unavailable."; }
$connect->close();
include_once('footer.php');