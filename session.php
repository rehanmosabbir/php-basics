<?php
$file_name = 'ostad.txt';

if ( !file_exists( $file_name ) ) {
    $handle = fopen( $file_name, 'w' ) or die( 'Cannot create file: ' . $file_name );
    fclose( $handle );
}

$content = file_get_contents( $file_name );

$content .= "Current date and time: " . date( 'Y-m-d H:i:s' ) . "\n";

file_put_contents( $file_name, $content );
