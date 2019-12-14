<?php
/**

Project 2 - logout.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This will log the user out.
Created: 12.10.19
Last Edited: 12.10.19

 **/
session_start();
if(isset($_SESSION['customerID'])) {
    unset($_SESSION['customerID']);
    session_destroy();
}
header("Location: index.php");
exit();