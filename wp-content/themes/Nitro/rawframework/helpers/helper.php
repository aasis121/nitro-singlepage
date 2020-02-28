<?php
/* 
    All the helpers functions are defined here.      
    Var_dump and die

*/

function dd( $var )
{
    echo '<pre>';
    var_dump( $var );
    echo '</pre>';
    die();
}
/* 
    Print and die
*/
function pd( $var ) {
    echo '<pre>';
    print_r( $var );
    echo '</pre>';
    die();
}

/* 
    Pretty print
*/
function pp( $var ) {
    echo '<pre>';
    print_r( $var );
    echo '</pre>';
}
