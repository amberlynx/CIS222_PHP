<?php
/**

Homework 5 - index.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Homework5/index.php
Description: This is the index page of homework 5.
Created: 10.15.19
Last Edited: 12.5.19

 **/
$data = "I am data";
$creationDate = "10/29/2019";
$author = "Amber Sakkinen";
$content = new MyBaseObject($data, $creationDate, $author);
$file = new MyFileObject($content);
$answer = "";

?>
<label>Please choose which function to run: save, load, getFilename, setFilename, getCreationDate, setCreationDate, getAuthor, setAuthor, getContent, setContent, exit</label>
<br><input type="answer" name="answer" id="answer"></input><button type="submit" value="submit" id="submit">Submit</button>
<?php

if(isset($POST_['answer']))
{
    $answer = $_POST['answer'];
}

// Interact with file functions
if($answer == "save")
{
    $file -> save($file, $content);
}
else if($answer == "load")
{
    $file -> load($file, $content);
}
else if($answer == "getFilename")
{
    echo $file -> getFilename();
}
else if($answer == "setFilename")
{
    $inputFileName = "";
    ?> <form method="post"><input type="submit" name="inputFileName" placeholder="Please enter the filename:"></form> <?php
    if(isset($_POST['inputFileName']))
    {
        $file -> setFilename($inputFileName);
    }
}
else if($answer == "getCreationDate")
{
    echo $content -> getCreationDate();
}
else if($answer == "setCreationDate")
{
    $inputCreationDate = "";
    ?> <form method="post"><input type="submit" name="inputCreationDate" placeholder="Please enter the date the content was created:"></form> <?php
    if(isset($_POST['inputCreationDate']))
    {
        $content -> setContent($inputCreationDate);
    }
}
else if($answer == "getAuthor")
{
    echo $content -> getAuthor();
}
else if($answer == "setAuthor")
{
    $inputAuthor = "";
    ?> <form method="post"><input type="submit" name="inputAuthor" placeholder="Please enter the content author:"></form> <?php
    if(isset($_POST['inputAuthor']))
    {
        $content -> setContent($inputAuthor);
    }
}
else if($answer == "getContent")
{
    echo $content -> getContent();
}
else if($answer == "setContent")
{
    $inputContent = "";
    ?> <form method="post"><input type="submit" name="inputContent" placeholder="Please enter some file content:"></form> <?php
    if(isset($_POST['inputContent']))
    {
        $content -> setContent($inputContent);
    }
}
else
{
    echo "Your entry was denied."; //Please type something from the list below:";
   // echo "save, load, getFilename, setFilename, getCreationDate, setCreationDate, getAuthor, setAuthor, getContent, setContent";
}