<?php
/**

Midterm - dbConnect.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the file that connects to the database.
Created: 10.14.19
Last Edited: 10.15.19

 **/
define('USER', 'alsakkinen');
define('PASS', '--');
define('HOST', 'localhost');
define('DB', 'alsakkinen');

$dbc = mysqli_connect(HOST, USER, PASS, DB);

$connect = new mysqli(HOST, USER, PASS, DB);

if ($connect->connect_error) { die("Connection failed: " . $connect->connect_error); }
