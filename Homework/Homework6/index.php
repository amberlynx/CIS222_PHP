<?php
/**

Homework 6 - index.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Homework6/index.php
Description: This is the index page of homework 6, cookies and sessions.
Created: 11.6.19
Last Edited: 11.12.19

 **/
setCookie('background-color', 'tan');
setCookie('font-style', 'normal');
setCookie('color', 'grey');

session_start();
$sid = session_id();
$bg = 'background-color';
$fs = 'font-style';
$c = 'color';

if(isset( $_POST[$bg])) { $_SESSION[$bg] =  $_POST[$bg]; }
if(isset( $_POST[$fs])) { $_SESSION[$fs] =  $_POST[$fs]; }
if(isset( $_POST[$c])) { $_SESSION[$c] =  $_POST[$c]; }

// If session set use session else set default - session worked properly before this segment was added but this code made the no default errors go away
if(isset($_SESSION[$bg])) { $background = $_SESSION[$bg]; }
else { $_SESSION[$bg] = "tan"; }

if(isset($_SESSION[$fs])) { $fStyle = $_SESSION[$fs]; }
else { $_SESSION[$fs] = "normal"; }

if(isset($_SESSION[$c])) { $color = $_SESSION[$c]; }
else { $_SESSION[$c] = "grey"; }

//if(!isset($_SESSION[$bg])) { $_SESSION[$bg] = "tan"; }
//if(!isset($_SESSION[$fs])) { $_SESSION[$fs] = "normal"; }
//if(!isset($_SESSION[$c])) { $_SESSION[$c] = "grey"; }
?>

<style>
    body {
        background-color: <?php echo $background; ?>;
        font-style: <?php echo $fStyle; ?>;
        color: <?php echo $color; ?>;
    }
</style>

<form method="post">
    <h3>Please fill out all the following settings</h3>
    <label>Please enter a background color:</label>
    <input type="text" name="background-color" value="tan" >
    <br><br>
    <label>Please enter a font:</label>
    <input type="text" name="font-style" value="bold" >
    <br><br>
    <label>Please enter a font color:</label>
    <input type="text" name="color" value="black" >
    <br><br>
    <input type="hidden" id="sid" value="$sid"<?php echo $sid?></input>
    <input type="submit" name="Submit" value="Submit" >
</form>