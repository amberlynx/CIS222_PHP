<?php
/**
 * qx.txt
 *
 * Have a great winter break!
 *
 * @category    Cumulative
 * @package     Quiz 10
 * @author      Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
 * @version     12.5.19
 * @grade       
 */

// 1. (4pts) Create a class below called DatabaseManager.
//              On construct this class should create a database connection.
//              It should also store this connection in a private property named connection.

    class DatabaseManager
    {
        function __construct()
        { 
            define('USER', 'alsakkinen');
            define('PASS', 'nope');
            define('HOST', 'localhost');
            define('DB', 'alsakkinen');
            
            $dbc = mysqli_connect(HOST, USER, PASS, DB);
            $connect = new mysqli(HOST, USER, PASS, DB);
            
            if ($connect->connect_error) { die("Connection failed: " . $connect->connect_error); }
        }
        private $connection = new DatabaseManager();

// 2. (1/3pts) Add a method to the DatabaseManager called query.
//              This method should accept a query string as a parameter.
//              This method should then use its connection to execute the query.

        function query($query)
        {
            // 4. (3pts) Add a try/catch to the query method.
            //    If caught, echo a simple error message and terminate the program.
            try{ $query -> $connection; }
            catch (Exception $e) { echo 'Error - Could not connect to database'; }
        }

// B. (1/3pts) Add a method to the DatabaseManager called results.
//              If the last query was a SELECT, this should return all returned rows.
//              If the last query was an UPDATE or DELETE, it should return the number of affected rows.
//              If the last query was an INSERT, it should return last inserted row id.

        function results($query)
        {
            if($query == 'SELECT * FROM `table`') { query($query); }
            if($query == 'UPDATE `table` SET column1 = value1 WHERE id = $id') { mysql_affected_rows(); }
            if($query == 'INSERT INTO `table` (column1, column2, column3) VALUES (value1, value2, value3)') { mysql_insert_id(); }
        }
    }