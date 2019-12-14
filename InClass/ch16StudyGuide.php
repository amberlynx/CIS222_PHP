<?php

include( "MyHTMLObject.php" );
$mySite = new MyHTMLObject();
$mySite -> setTitle( "Chad's Used Cars" );

$mySite ->  addParagraph( "This is my welcome paragraph!" );
$mySite ->  addParagraph( "This is my second paragraph!" );
$mySite ->  addParagraph( "This is my third paragraph!" );
$mySite ->  addParagraph( "This is my fourth paragraph!" );


$mySite ->  addInput( "First Name" );
$mySite ->  addInput( "Last Name" );


$mySite -> addScript( "js_file1.js" );
$mySite -> addScript( "js_file2.js" );
$mySite -> addScript( "js_file3.js" );
$mySite -> addScript( "js_file4.js" );

$mySite -> render( );


class MyHTMLObject
{
    private $title;
    private $contentBlocks;
    private $jsFiles;

    public $ObjectNumber;

    function __construct()
    {
        $this->title = "My Page Title";
        $this->contentBlocks = array();
        $this->jsFiles = array();
        $this->ObjectNumber = 1;
    }

    function addScript($name)
    {
        $this->jsFiles[] = "<script src='$name' ></script>";
    }

    function setTitle($t)
    {
        $this->title = $t;
    }

    function addParagraph($s)
    {
        $this->contentBlocks[] = "<p>" . $s . "</p>";
    }

    function addInput($i)
    {
        $this->contentBlocks[] = "<input type='text' placeholder='$i' >";
    }

    function printSQLTable( $tname )
    {
        // $pdo = new PDO();
        // $r = $pdo -> query( 'DESCRIBE ' . $tname );
        //while( $row = $r -> fetch() )
        //{
        //echo $row;
        //}
    }

    function render( )
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title><?php echo $this -> title; ?></title>
            <?php
            foreach( $this -> jsFiles as $js )
            {
                echo $js;
            }
            ?>
        </head>
        <body>
        <h1><?php echo $this -> title; ?></h1>
        <?php
        foreach( $this -> contentBlocks as $block )
        {
            echo $block;
        }
        ?>
        </body>
        </html>
        <?php
    }
}