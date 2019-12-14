<?php
/**
 * q4.txt
 *
 * Quiz 4 for your enjoyment
 *
 * @category    Quiz
 * @package     Quiz 4
 * @author      Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
 * @version     2019.10.03
 * @grade       7 / 10
 */

/**
 * 3/3 pts
 * 1. You are working on a new project with a high profile client
 *  It is your job to set up a database connection.
 *  Create a variable called $mysqlconnection and store a new database connection object in it.
 *	This connection object can be either PDO or mysqli.
 *	Just use the credentials already included below.
 */
$DBUSER = 'mzuck';
$DBPASS = 'TotallyNotARobot';
$DBHOST = 'robobook.com';
$DBNAME = 'robobook_prod';
$DBCHARSET = 'utf8';

    $mysqlconnection = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);

/**
 * 1/3 pts
 * 2. Use the previous connection object to select all columns from a table called memposts.
 *	Once you execute this, loop through the results and echo a column called `mptxt`.
 *	Assume there are a total of 7 columns and the `mempost_id` field is the primary key.
 *	Feel free to ask about the table structure at any time during this quiz if needed.
 */
    //USE $mysqlconnection;
    $qry = 'SELECT *
    FROM `memposts`';
    $r  = $mysqlconnection -> query( $qry );
    while( $column = $r -> fetch( ) )
    {
        echo $column['mptxt'];
    };


/**
 * 1/2 pts
 * 3. Use this connection to execute an update on the previous table.
 *	You want to set a field called `hidden` to 1 and `updated` to the current date and time.
 *	Only do this for all rows that have a `user_id` of 4 or 7.
 */
    USE $mysqlconnection;
    UPDATE `memposts`
    SET `hidden` = 1, `updated` = NOW( )
    WHERE `user_id` = 4 || `user_id` = 7;
    // Query looks good but you need to use the PHP functionality to execute the query.


/**
 * 1/2 pts
 * 4. Manually insert a row into this table.
 *	You only need to specify the following fields: `mempost_id`, `user_id`, `mptxt`, `created`
 *	Assume all unspecified fields will default to their values.
 *	The user id is 1337.
 *	The created field should be the current date and time.
 *	The message should read 'I love PHP!' without the quotes.
 */

    INSERT INTO `memposts`
        (`user_id`, `mptxt`, `created`)
    VALUES
        (`1337`, `I love PHP!`, NOW());
        // Query looks good but you need to use the PHP functionality to execute the query.


/**
 * 1/1 pt
 * E. Explain some advantages of a PDO database connection over a mysqli connection.

    PDO provides prepared statements and more flexibility for data return compared to mysqli.

 */
