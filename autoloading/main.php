<?php

function autoload( $name )
{
    include "{$name}.php";
}

spl_autoload_register( "autoload" );

( new Bike )->start();
( new Planet )->echoName();
