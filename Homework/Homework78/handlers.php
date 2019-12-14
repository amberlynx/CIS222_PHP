<?php
/**

Homework 7 & 8 - Homework78.php
Author: Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
Link: https://cislinux.hfcc.edu/~alsakkinen/cis222Repo/Homework/Homework78/index.php
Description: This is the functionality behind index.php of homework 78.
Created: 11.26.19
Last Edited: 12.2.19

 **/
try
{
    if(isset($_POST['answer'])) {
        try {
            $check = 'error';
            if (!(preg_match("/{$check}/i", $_POST['answer']))) {
                $input = $_POST['answer'];
                function hashString($input, $j = 200, $s = 'th3M_s@Lt1EE_801ils')
                {
                    $n = crypt($input, $s);
                    for ($i = 0; $i < $j; ++$i) {
                        $n = crypt($n . $input, $s);
                    }
                    return $n;
                }

                echo hashString($input);
            } else {
                echo 'I detected an error. ';
            } // If string contains 'error'
        } catch (Exception $e) {
            echo 'There was an error processing this page, please try again.';
        }
    }

    try {
        if(isset($_POST['btnCorrect'])){ echo 'Success!'; }
    }   catch(Exception $e){ echo 'Unsuccessful!'; }

    try {
        if(isset($_POST['btnError']))
        {
            try { echo 'ERROR - You have successfully thrown an error.';}
            catch(Exception $e){ echo 'Sorry, you clicked a bad form.'; }
        }
    }   catch(Exception $e){ echo 'There was an error while trying to throw an error. Error inception.'; }
} catch (Exception $e) { echo 'There was an error processing this page, please try again.'; }
