<?php
/**

Homework 5 - MyFileObject.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is an extension of the base class for homework 5 called myFileObject,
this file will save and load data while interacting with MyBaseObject.
Created: 10.15.19
Last Edited: 11.5.19

 **/
include("MyBaseObject");
$base = new MyBaseObject();
$content = $base -> sendContent();
$update = $base -> updateBase();

class MyFileObject extends MyBaseObject
{
    private $filename = "MyFile.txt";

    function __construct($input)
    {
        $this->filename = $input;
    }

    public function getFilename() { return $this->filename; }
    public function setFilename($filename) { $this->filename = $filename; }


    function save($filename, $content)
    {
        // Write MyBaseFile to MyFile.txt file
        file_put_contents($filename, $content) or die("There was an error while trying to save file.");
    }
    function load($filename, $content)
    {
        fopen($filename, "r");
        // Write current contents of file to MyBaseFile properties 
        file_get_contents($filename, $update) or die("File isn't loading. Please try again.");
        fclose($filename);
        
    }
} // End MyFileObject class