<?php
function generateString( $length = 50 )
{
    $chars = array
    (
        '0','1','2','3','4','5','6','7','8','9',
        'a','b','c','d','e','f','g','h','i','j',
        'k','l','m','n','o','p','q','r','s','t',
        'u','v','w','x','y','z',
        'A','B','C','D','E','F','G','H','I','J',
        'K','L','M','N','O','P','Q','R','S','T',
        'U','V','W','X','Y','Z'
    );

    $str = '';
    for( $x = 0; $x < $length; $x++ ) { $str .= $chars[ rand( 0, ( count( $chars ) - 1 ) ) ]; }
    return $str;
}