<?php
setcookie( 'pizza', 'cheese' );
session_start();

$bgtext = 'background-color';
if( isset( $_POST[$bgtext] ) ){ $_SESSION[ $bgtext ] =  $_POST[$bgtext]; }

$sid = session_id();

?><h1>Sessions</h1><?php
echo "<p>Session ID: $sid</p>";

var_dump( $_SESSION );
var_dump( $_POST );

$bg = $_SESSION[ $bgtext ];
?>
    <br><br>
    <form method="post">
        <input type="text" name="background-color" placeholder="background-color" value="" >
        <input type="submit" name="Submit" value="Submit" >
    </form>

    <style> body { background-color: <?php echo $bg; ?>; } </style><br>

<?php
setcookie( 'flavor', 'oatmeal' );
setcookie( 'cookie2', 'value2' );
var_dump( $_COOKIE );