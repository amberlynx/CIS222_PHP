<?php
/**

Project 2 - productDetails.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Project2/productDetails.php
Description: This is the productDetails page where a user can view the details of a product.
Created: 12.7.19
Last Edited: 12.10.19

**/
include_once('template.php');
require('dbConnect.php');

if($_GET['id'] == 1) {
    ?><html>
        <h1 class="text-center text-success">HoloWatch</h1><br><br>
        <center><div id="holowatch"><img class="img-thumbnail" src="Images/holowatch.jpg" alt="a holographic watch"></a></div></center><br><br>
        <p class="text-center">The next level of smart watch technology: The HoloWatch, integrated with mei software, will be the life task manager you've been looking for.<br>
           It is a holographic version of the basic smart watch you know and love.</p><br><br>
        <center><form class="border border-success rounded" action="addCart.php?pid=1&quantity=$quantity" method="post"><br><br>
                <label for="quantity">Quantity: &nbsp;&nbsp;</label>
                <input type="number" name="quantity" min="1" value="quantity"><br><br><br>
                <input class="btn btn-outline-success" type="submit" value="Add to cart" id="submit"><br><br>
        </form></center>
    </html><?php
}

if($_GET['id'] == 2) {
    ?><html>
        <h1 class="text-center text-success">Mei</h1><br><br>
        <center><div id="mei"><img class="img-thumbnail" src="Images/mei.jpg" alt="a small home system device"></a></div></center><br><br>
        <p class="text-center">A system manager designed for the everyday user or a work manager for business professionals.<br>
           Mei software can help manage your tasks and make life easier while keeping your data private.</p><br><br>
        <center><form class="border border-success rounded" action="addCart.php?pid=2&quantity=$quantity" method="post"><br><br>
                <label for="quantity">Quantity: &nbsp;&nbsp;</label>
                <input type="number" name="quantity" min="1" value="quantity"><br><br><br>
                <input class="btn btn-outline-success" type="submit" value="Add to cart" id="submit"><br><br>
        </form></center>
    </html><?php
}

if($_GET['id'] == 4) {
    ?><html>
        <h1 class="text-center text-success">vrContacts</h1><br><br>
        <center><div id="vrcontacts"><img class="img-thumbnail" src="Images/vrcontacts.jpg" alt="technology integrated contacts"></a></div></center><br><br>
        <p class="text-center">Want to see the world, thats beauty is often taken for granted, but don't want to wear bulky glasses?<br>
           We now offer vrContacts, contacts that you can see a whole new prespective to the world in or maybe you want
           to be the creator of your own world..<br> We have that option available!</p><br><br>
        <center><form class="border border-success rounded" action="addCart.php?pid=4&quantity=$quantity" method="post"><br><br>
                <label for="quantity">Quantity: &nbsp;&nbsp;</label>
                <input type="number" name="quantity" min="1" value="quantity"><br><br><br>
                <input class="btn btn-outline-success" type="submit" value="Add to cart" id="submit"><br><br>
        </form></center>
    </html><?php
}

if($_GET['id'] == 5) {
    ?><html>
        <h1 class="text-center text-success">HoloScreen</h1><br><br>
        <center><div id="holoscreen"><img class="img-thumbnail" src="Images/holoscreen.jpg" alt="a screen with holographic technology"></a></div></center><br><br>
        <p class="text-center">The HoloScreen looks like your basic screen protector but behold, using the holoDynamic interactive app,<br>
           you can make your flat piece of glass an interactive and dynamic world where you can spawn in nearly anything
           you can dream of!<br> Can't find what you want in our premade list? Create your own characters, objects, and landscapes
           with our holoToolkit, included with the holoDynamic app.</p><br><br>
        <center><form class="border border-success rounded" action="addCart.php?pid=5&quantity=$quantity" method="post"><br><br>
                <label for="quantity">Quantity: &nbsp;&nbsp;</label>
                <input type="number" name="quantity" min="1" value="quantity"><br><br><br>
                <input class="btn btn-outline-success" type="submit" value="Add to cart" id="submit"><br><br>
            </form></center>
    </html><?php
} echo "<br><br><br><br><br><br><br><br><br>";
include_once('footer.php');

if(isset($_POST['quantity'])) { $quantity = $_POST['quantity']; }


/* Junk Drawer

if(isset($_POST['kitchenSet'])) {
    ?><html>
        <h1>KitchenSet</h1>
        <div id="kitchenSet"><img src="Images/kitchenSet.JPG" alt="kitchen arms"></a></div>
        <p>Your new personal butler! Comes with a screen where you can enter in a recipe or download recipes from our
           catalog or any recipe book on the internet. The KitchenSet also comes with an app where you can order food
           to be made by the time you get home, or add your recipes through the app.</p>
        <form action="catalog.php" method="post">
            <label for="quantity">Quantity: </label><input type="number" name="quantity" min="1">
            <input type="submit" value="Add to cart" id="submit">
        </form>
    </html><?php
}

if(isset($_POST['folder'])) {
    ?><html>
        <h1>Folder</h1>
        <div id="folder"><img src="Images/folder.JPG" alt="device for folding clothes"></a></div>
        <p>Tired of the tedious chore of folding your clothes? Our new bot Folder can suck them up and spit them out perfectly folded
           and ready to put away!</p>
        <form action="catalog.php" method="post">
            <label for="quantity">Quantity: </label><input type="number" name="quantity" min="1">
            <input type="submit" value="Add to cart" id="submit">
        </form>
    </html><?php
}

 */