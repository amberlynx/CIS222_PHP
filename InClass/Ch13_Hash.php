<?php
class Hash
{
    public function __construct(  ) { }

    function hash( $p, $j = 200, $s = "th3M_s@Lt1EE_80111s" )
    {
        $n = crypt( $p, $s );
        for( $i = 0; $i < $j; ++$i ) { $n = crypt( $n.$p, $s ); }
        return $n;
    }

    function generateString( $length = 16 )
    {
        $chars = array
        (
            '0','1','2','3','4','5','6','7','8','9',
            'a','b','c','d','e','f','g','h','i','j',
            'k','l','m','n','o','p','q','r','s','t',
            'u','v','w','x','y','z',
            'A','B','C','D','E','F','G','H','I','J',
            'K','L','M','N','O','P','Q','R','S','T',
            'U','V','W','X','Y','Z',
            'aF','bT','Ec','Rd','eX','Ff','gT','Yh','Qi','Bj',
            'kP','lQ','Wm','Rn','Bo','Hp','Gq','rC','Vs','tN',
            'uQ','vT','Rw','xI','yO','zG',
        );

        $str = '';
        for( $x = 0; $x < $length; $x++ ) { $str .= $chars[ rand( 0, ( count( $chars ) - 1 ) ) ]; }
        return strtolower( $str );
    }
}