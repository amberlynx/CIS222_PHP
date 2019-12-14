<?php
/**
* quiz6.txt
*
* HAPPY HALLOWEEN!
*
* @category    Chapter 10
* @package     Quiz 6
* @author      Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
* @version     2019.12.10
* @grade
*/

// 1. (4pts) Write a basic HTML POST form that allows a user to update their email address.
//              This form should have a text input as well as a submit button.
?>
    <form method="post">
        <label>Update Email Address:</label><br>
        <input type="text" name="email" value="$email"><br>
        <input type="submit" value="Submit">
    </form>

    

// 2. (2pts) Add a hidden input to this form that contains the users user_id in the value.
//              Assume the users user_id is in a varaible called $user_id.
//              The name of this input should also be user_id.

    <input type="hidden" name="user_id" value="$user_id">
<?php

// 3. (4pts) Now we need to update the users table that contains the email address.
//              Write the basic PHP code and SQL query needed to perform the update.
//              Assume the table is called users and it at least has a user_id and email field.

    
    $server = "localhost";
    $username = "alsakkinen";
    $ps = "ITSASECRET";
    $dbname = "alsakkinen";
    
    $connect = new mysqli($server, $username, $ps, $dbname);
    $query = "UPDATE users SET email='$email' WHERE user_id='$user_id';
    
    if ($connect->query($query) == TRUE) { echo "Email has been updated!"; }
    else { echo "ERROR - Could not update email."; }
    
    $connect->close();



// Ex. (1pt) Write a SQL query that will return the number of users (rows) in the table above.
//              You do not need any PHP for this question, only the SQL.

//    SELECT COUNT(*) FROM users;
    
    
