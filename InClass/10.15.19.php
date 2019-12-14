<?php
include('MyBaseObject.php');
$ex1 = new MyBaseObject();
$ex2 = new MyBaseObject();
var_dump($ex1); // Vardumps look messy
echo '<br><br>';
var_dump($ex2);

for($x=0; $x<10; $x++)
{
    $fileClass = new MyFileObject();
    var_dump($fileClass);
    echo '<br><br>';
}