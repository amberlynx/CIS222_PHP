<?php
/**

Homework 7 & 8 - Homework78.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/index.php
Description: This is the main form page of homework 78.
Created: 11.26.19
Last Edited: 11.26.19

 **/
include('handlers.php');
?>
<!DOCTYPE html>
<html lang="en">

    <body>
        <form action="index.php" method="post" id="correct"><p><input type="submit" name="btnCorrect" value="Correct"></p></form>
        <form action="index.php" method="post" id="error"><p><input type="submit" name="btnError" value="Throw Error"></p></form>

        <form action="index.php" method="post" id="inputName">
            <p id="lblInput">Enter a string: <input type="text" name="answer" id="answer"></p>
            <input type="submit" name="submit" id="btnSubmit" value="Submit">
        </form>
    </body>
</html>
