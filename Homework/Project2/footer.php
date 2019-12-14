<?php
/**

Project 2 - footer.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the code for the project's footer.
Created: 12.7.19
Last Edited: 12.8.19

 **/
$siteName = "EveTech";
$email = "EveTechService@gmail.com";
$serviceNumber = "734-369-3696";
$contactInfo = "Contact us: ".$email." / ".$serviceNumber;
$admin = ' | <a class="text-warning" href="admin.php">Admin</a>'; 
?>
 
<footer class="page-footer font-small bg-success text-white pt-4">
    <div class="footer-copyright text-center py-3"><?php echo $siteName.'© 20'.date('y').$admin.'<br>'.$contactInfo; ?></div>
</footer>