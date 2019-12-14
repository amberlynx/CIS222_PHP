<?php
/**
 *
 * Project 1 - dbConnect.php
 * Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
 * Link: --
 * Description: This is the file that connects to the database.
 * Last Edited: 10.15.19
 *
 **/
define('HOST', 'localhost');
define('USER', 'alsakkinen');
define('PASS', 'brzchj2u');
define('DB', 'alsakkinen');
//$dbHost = `127.0.0.1`;
//$charset = 'utf8';

$dbc = mysqli_connect(HOST, USER, PASS, DB);// or die("Database is having trouble connecting.");

$connect = new mysqli(HOST, USER, PASS, DB);

if ($connect->connect_error) { die("Connection failed: " . $connect->connect_error); }

//$connect->close();


































//** Junk Drawer
//$dsn = "mysql:host=$dbHost;dbname=$db;charset=$charset";
//$opt =
//    [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_EMULATE_PREPARES => false,
//    ];
//$pdo = new PDO($dsn, $dbUser, $pswd, $opt);

//mysqli_select_db($dbConn, $db) or die("Database selection cannot be completed.");

//$servername = "localhost";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($dbConn->connect_error) {
//    die("Connection failed: " . $dbConn->connect_error);
//}

// From contact.php
//$field1 = $mysqli->real_escape_string($_POST['field1']) // NON FUNCTIONAL EXAMPLE
//mysqli_query($dbConnect, $qry); // NON FUNCTIONAL EXAMPLE
//$mysqli->close(); // NON FUNCTIONAL EXAMPLE