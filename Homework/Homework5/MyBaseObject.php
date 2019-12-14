<?php
/**

Homework 5 - MyBaseObject.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: --
Description: This is the base class of homework 5.
Created: 10.15.19
Last Edited: 11.5.19

 **/
class MyBaseObject
{
    private $creationDate;
    private  $author;
    private $content;

//    function defaultData($creationDate, $author, $content)
//    {
//        $data = "I am data";
//        $creationDate = NOW();
//        $author = "by Amber Sakkinen";
//    }

    function __construct($creationDate, $author, $content)
    {
        $this->creationDate = $creationDate;
        $this->author = $author;
        $this->content = $content;
    }

    public function getCreationDate() { return $this->creationDate; }
    public function setCreationDate($creationDate) { $this->creationDate = $creationDate; }

    public function getAuthor() { return $this->author; }
    public function setAuthor($author) { $this->author = $author; }

    public function getContent() { return $this->content; }
    public function setContent($content) { $this->content = $content; }
    
    public function sendContent()
    {
        return "Created: ".getCreationDate()." by: ".getAuthor().\n.getContent();   
    }
    
    public function updateBase()
    {
        setCreationDate();
        setAuthor();
        setContent();
    }
} // End MyBaseObject class