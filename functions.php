<?php
/**
 * Determines a number is even or odd
 */

function isEven( $n )
{

    if ( $n % 2 == 0 ) {
        return true;
    }

    return false;
}

function factorial( int $x )
{
    $result = 1;

    for ( $i = $x; $i > 1; $i-- ) {
        $result *= $i;
    }

    return $result;
}

function serve( $itemName = "Coffee", $noOfItem = "1 cup" )
{
    echo "{$noOfItem} of {$itemName} has/have been served.";
}

function add( int $x, int $y, int...$numbers ): int
{
    $result = 0;

    for ( $i = 0; $i < count( $numbers ); $i++ ) {
        $result += $numbers[$i];
    }

    return $result;
}

function doTaskA()
{
    echo "Task A done\n";
}

function doTaskB()
{
    echo "Task B done\n";
}

function doTaskC()
{
    echo "Task C done\n";
}

function doTaskD()
{
    echo "Task D done\n";
}

function doTaskE()
{
    echo "Task E done\n";
}

function doTheLargerTask()
{
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

function printN( $n )
{

    if ( $n >= 10 ) {
        return;
    }

    echo $n . " ";
    $n++;
    printN( $n );
}

function printNumber( $counter, $end, $step )
{

    if ( $counter > $end ) {
        return;
    }

    echo $counter . " ";
    $counter += $step;
    printNumber( $counter, $end, $step );
}

function fibonacci( $old, $new, $end )
{
    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }

    $start++;
    echo $old . " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci( $old, $new, $end );
}
