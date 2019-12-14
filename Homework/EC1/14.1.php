<!--
    Extra Credit Assignment - 14.1.php
    Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
    Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/EC1/14.1.php
    Description: This is Script example 14.1 from Chapter 14.
    Created: 11.18.19
    Last Edited: 11.21.19
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Script 14.1</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $pattern = trim($_POST['pattern']);
            $subject = trim($_POST['subject']);
        
            echo "<p>The result of checking<br><strong>$pattern</strong><br>against<br>$subject<br>is ";
            
            if(preg_match($pattern, $subject)) { echo 'TRUE!</p>'; }
            else { echo 'FALSE!</p>'; }
        }
    ?>
    <form action="14.1.php" method="post"
        <p>Regular Expression Pattern: <input type="text" name="pattern" value="<?php if(isset($pattern)) echo htmlentities($pattern); ?>" size="40"> (include the delimiters)</p>
        <p>Test Subject: <input type="text" name="subject" value="<?php if(isset($subject))echo htmlentities($subject)?>" size="40"></p>
        <input type="submit" name="Submit" value="Test!">
    </form>
</body>
</html>