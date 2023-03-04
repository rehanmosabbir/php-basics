<?php declare ( strict_types = 1 );
include_once "functions.php";

/*
$name = "Mosabbir";
$age = 34;
$message = "How are you?";
$word = "age";

echo $$word;
echo "\n";
echo 'Hello '.$name.'. '.$message;
echo "\n";
echo "Hello {$name}. {$message}";

$task = "Read";
echo $task;
echo "\n";
$task = "Write";
echo $task;
echo "\n";

define("PI", 3.14159);
$constant = 'constant';
echo constant("PI");
echo "\n";
echo "The value of PI is {$constant('PI')}";
echo "\n";
echo 'Value of PI = '.PI;
// define('PI',123);

$fname = "Hasin";
$lName = "Hayder";
$age = 32;
$isOldEnough = true;
$isEmpty = null;
$cgpa = 3.89;

var_dump($fname,$lName,$age,$cgpa,$isOldEnough,$isEmpty);

$name = "Earth";
$uname = strtoupper($name);

echo "We're living on {$uname}\n";
printf("We're living on %s\n", $uname);

$fname = "Isaac";
$lName = "Newton";

printf("His %s name is %s %s\n","Full", $fname,$lName);

echo "His
name is
{$fname} {$lName}";

$planet1 = "Mercury";
$planet2 = "Jupiter";

echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s \n",strtoupper($planet1),strrev($planet2));

$number = 100;
$number += 10;
$number -= 10;
$number *= 10;
$number /= 10;
$number %= 9;

$number++;
$number--;

echo $number;

$n = 5;
$m = $n++;
echo $m, "\n" , $n;
echo "\n";

$p = 5;
$q = ++$p;
echo $p, "\n" , $q;

$x = $y = $z = 50;
echo $x, "\n" , $y, "\n" ,$z, "\n";

$d = 12;
$o = 012;
$h = 0x12;

printf("The values are %d and %d and %d\n", $d,$o,$h);
printf("The equivalent of %d is %b\n", 12,12);
printf("The equivalent of %d is %o\n", 65536,65536);
printf("The equivalent of %d is %x\n", 120,120);

$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";

printf('His name is %2$s, %3$s %1$s', $fname,$lname,$middlename);
echo "\n";
printf('The binary equivalent of %1$d is %1$b',12);
echo "\n";

$m = 12.566;
printf("%.2f",$m);
echo "\n";

$num1 = 23;
$num2 = 2356;

printf("%05d",$num1);
echo "\n";
printf("%05d",$num2);
echo "\n";

$num1 = 23.5648;
$num2 = 2356.985;

printf("%09.2f",$num1);
echo "\n";
printf("%09.2f",$num2);
echo "\n";

$fname = "Isaac";
$lname = "Newton";

$output = sprintf("His name is %s %s\n", $fname, $lname);
echo strtoupper($output);

$n = 13;

if($n % 2 == 0){
echo "$n is an even number";
}else{
echo "$n is a odd number";
}

$n = 10;
$m = 12;
if($n != $m){
echo "$n is not equal to $m";
}

$amountRahim = 100;
$amountKarim = 100;

if($amountKarim == $amountRahim){
echo "Karim and Rahim has same amount of money";
} elseif($amountRahim > $amountKarim){
echo "Rahim has more money than Karim";
} elseif($amountKarim > $amountRahim){
echo "Karim has more money than Rahim";
}

$age = 13;
if($age >= 13 && $age <= 19){
echo "This person is a teenager";
} else{
echo "This person is not a teenager";
}

$food = "orange";

if("tuna" == $food || "salmon" == $food){
echo "It contains vitamin D.";
} elseif("apple" == $food){
echo "It doesn't contain vitamin D.";
} else{
echo "We don't know if {$food} contains vitamin D or not.";
}

$year = 1900;

if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)){
echo "{$year} is a leap year.";
} else{
echo "{$year} is not a leap year.";
}

$condition1 = true;
$condition2 = false;
$condition3 = true;

if($condition1){
if($condition2){
if($condition3){
echo "Hello";
} else{
echo "no 1";
}
} else{
echo "no 2";
}
}else{
echo "no 3";
}

echo "\n";

if($condition1 && $condition2 && $condition3){
echo "Hello";
} elseif($condition1 && $condition2){
echo "no 1";
} elseif($condition1){
echo "no 2";
} else {
echo "no 3";
}

$n = 13;
if(12 == $n){
echo "Twelve";
} elseif(10 == $n){
echo "Ten";
} else{
echo "A Number";
}

echo "\n";

$numberInWord = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "A Number");
echo $numberInWord;

echo "\n";

if($n % 2 == 0){
echo "{$n} is an even number";
} else{
echo "{$n} is a odd number";
}

echo "\n";

$res = ($n % 2 == 0) ? "{$n} is an even number" : "{$n} is a odd number";
echo $res;
echo "\n";

$n = 13;
$r = $n % 2;

switch($r){
case 0:
echo "{$n} is an even number\n";
break;
case 1:
echo "{$n} is an odd number\n";
}

$color = "red";
switch($color){
case "red":
case "green":
echo ucwords($color)." is my favorite color";
break;
case "blue":
echo "Blue is not my favorite color";
break;
default:
echo "This color is ok";
}

$n = 12;
$r = abs($n % 2);

switch($r){
case 0:
switch($n){
case $n > 0:
echo "{$n} is a positive even number";
break;
case $n < 0:
echo "{$n} is a negative even number";
}
break;
case 1:
switch($n){
case $n > 0:
echo "{$n} is a positive odd number";
break;
case $n < 0:
echo "{$n} is a negative odd number";
}
break;
}

echo "\n";

switch(true){
case $n > 0 && $n % 2 == 0:
echo "{$n} is a positive even number";
break;
case $n > 0 && $n % 2 != 0;
echo "{$n} is a positive odd number";
break;
case $n < 0 && $n % 2 == 0;
echo "{$n} is a negative even number";
break;
case $n < 0 && $n % 2 != 0;
echo "{$n} is a negative odd number";
break;
}

$string = "8Balls";

switch($string){
case "7Balls":
echo "Seven Balls";
break;
case 8:
echo "Eight";
break;
case "8Balls":
echo "Eight Balls";
break;
}

$f = false || true;
$e = false or true;

// $f = true && false;
// $e = true and false;

var_dump($f,$e);

$n = 13;
if($n % 2 == 0){
echo "Even Number";
echo PHP_EOL;
echo "Some text";
}else{
echo "Odd Number";
echo PHP_EOL;
echo "Some text++";
}

echo PHP_EOL;

if($n % 2 == 0):
echo "Even Number";
echo PHP_EOL;
echo "Some text";
else:
echo "Odd Number";
echo PHP_EOL;
echo "Some text++";
endif;

echo PHP_EOL;
switch($n):
case $n % 2 == 0:
echo "Even Number";
echo PHP_EOL;
break;
case $n % 2 != 0:
echo "Odd Number";
echo PHP_EOL;
endswitch;

$n = 13;
?>
<?php
if($n % 2 == 0):
?>
Even Number
Some text
<?php
else:
?>
Odd Number
Some text++
<?php
endif;

$n = 10;
$res = ( $n % 2 == 0 ) ? "A" : (  ( $n == 11 ) ? "B" : "C" );
echo $res;

if ( $n % 2 == 0 ) {
echo "Even Number";
}

for ( $i = 0; $i < 10; $i++ ) {
// echo $i;
echo PHP_EOL;

for ( $j = 0; $j < $i; $j++ ) {
echo "*";
}

}

echo PHP_EOL;

$i = 0;

while ( $i < 10 ) {
$i++;
echo $i;
echo PHP_EOL;
}

$i = 1;

do {
echo $i;
echo PHP_EOL;
$i++;
} while ( $i < 10 );

$i = 0;
a:$i++;
echo $i;
echo PHP_EOL;

if ( $i < 10 ) {
goto a;
}

for ( $i = 1, $j = 1; $i <= 10; $i++, $j++ ) {
echo $i . ":" . $j;
echo PHP_EOL;
}

for ( $i = 1; $i <= 100; $i++ ) {

if ( $i % 7 == 0 ) {
echo $i;
echo PHP_EOL;
}

if ( $i % 11 == 0 ) {
echo $i;
echo PHP_EOL;
}

}

for ( $i = 0, $j = 0; $i <= 100; $i += 7, $j += 11 ) {
echo $i;
echo PHP_EOL;

if ( $j <= 100 ) {
echo $j;
echo PHP_EOL;
}

}

$i = 0;

while ( $i < 5 ) {
echo $i;
echo PHP_EOL;
$i++;
}

echo "==============";
echo PHP_EOL;
$i = 0;

while ( $i++ < 5 ) {
echo $i;
echo PHP_EOL;
}

echo "==============";
echo PHP_EOL;
$i = 0;

while ( ++$i < 5 ) {
echo $i;
echo PHP_EOL;
}

for ( $i = 1; $i < 10; $i++ ) {

if ( $i % 2 != 0 ) {
continue;
}

echo $i;
echo PHP_EOL;
}

echo "===============";
echo PHP_EOL;

for ( $i = 1; $i < 10; $i++ ) {

if ( $i > 5 ) {
break;
}

echo $i;
echo PHP_EOL;
}

$veryOld = 0;
$old = 1;
$new = 1;

for ( $i = 0; $i < 10; $i++ ) {
echo $veryOld . " ";
$old = $new;
$new = $old + $veryOld;
$veryOld = $old;
}

$x = 13;

if ( isEven( $x ) ) {
echo "{$x} is an even number";
} else {
echo "{$x} is an odd number";
}

echo PHP_EOL;

$n = 5;
echo "Factorial of {$n} is : " . factorial( $n );

serve( "Salad", "2 bowls" );

echo add( 5, 6, 7 );

echo add( 1, 2, 3, 4, 5, 6, 7 );

doTheLargerTask();

printN( 0 );

printNumber( 10, 20, 2 );

fibonacci( 0, 1, 10 );

$name = "Earth";

function doSomething()
{
global $name;
echo $name;
// echo $GLOBALS["name"];
}

doSomething();

function doSomething()
{
global $name;
$name = "Earth";
echo $name;
}

doSomething();
echo PHP_EOL;
echo $name;

function doSomething()
{
static $i;
$i = $i ?? 0;
echo $i;
echo PHP_EOL;
$i++;
}

function doExtra()
{
static $i;
$i = $i ?? 0;
echo $i;
echo PHP_EOL;
$i++;
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doSomething();
doSomething();
doExtra();
doExtra();
doExtra();

$numbers = [1, 2, 3, 4, 5];
$sum = 0;

foreach ( $numbers as $number ) {

if ( $number % 2 == 0 ) {
continue;
}

$sum += $number;
}

echo $sum;

function strFunc( $str )
{

if ( strlen( $str ) == 0 ) {
return "";
} else {
return strFunc( substr( $str, 1 ) ) . substr( $str, 0, 1 );
}

}

echo strFunc( "hello" );

$foo = function ( $x ) {
return $x * 2;
};

$bar = function ( $x ) use ( $foo ) {
return foo( $x ) + 1;
};

echo $bar( 5 );

echo "Hello World";

function test( array $arr, int $number )
{

for ( $i = 0; $i < count( $arr ); $i++ ) {

for ( $j = 0; $j < count( $arr ); $j++ ) {

if ( $arr[$i] + $arr[$j] == $number ) {
return true;
}

}

}

return false;
}

$res = test( [5, 7, 8, 2, 7, 98], 100 );
echo $res;

$students = ["Mosabbir", "Mozahid", "Mosaddek", "Mahirah", "Rokti"];

for ( $i = 0; $i < count( $students ); $i++ ) {
echo $students[$i] . "\n";
}

$students[3] = "Mosaraf";
echo "=================";
echo PHP_EOL;

for ( $i = 0; $i < count( $students ); $i++ ) {
echo $students[$i] . "\n";
}

echo "=================";
echo PHP_EOL;

$student = array_pop( $students );
echo $student;

echo PHP_EOL;
echo "=================";
echo PHP_EOL;

for ( $i = 0; $i < count( $students ); $i++ ) {
echo $students[$i] . "\n";
}

array_shift( $students );
echo "=================";
echo PHP_EOL;

for ( $i = 0; $i < count( $students ); $i++ ) {
echo $students[$i] . "\n";
}

array_push( $students, "Rabeya" );
echo "=================";
echo PHP_EOL;

for ( $i = 0; $i < count( $students ); $i++ ) {
echo $students[$i] . "\n";
}

array_unshift( $students, "Meheran" );
echo "=================";
echo PHP_EOL;

for ( $i = 0; $i < count( $students ); $i++ ) {
echo $students[$i] . "\n";
}

$food = [
"vegetables" => "Cucumber, Tomato, Eggplant",
"fruits"     => "Mango, Banana, Kiwi",
"drinks"     => "Milk, Tea, Coffee",
];

$food["drinks"] .= ", Orange Juice";

foreach ( $food as $key => $value ) {
echo "{$key} = {$value}\n";
}

$keys = array_keys( $food );
print_r( $keys );

for ( $i = 0; $i < count( $keys ); $i++ ) {
$key = $keys[$i];
echo $food[$key] . "\n";
}

$values = array_values( $food );
print_r( $values );

for ( $i = 0; $i < count( $values ); $i++ ) {
$value = $values[$i];
echo $value . "\n";
}

$vegetables = preg_split( '/(, |,)/', "Cucumber, Tomato, Eggplant,Gourd" );
print_r( $vegetables );

$vegetablesString = join( ', ', $vegetables );
echo $vegetablesString;

$food = [
"vegetables" => explode( ", ", "Cucumber, Tomato, Eggplant" ),
"fruits"     => explode( ", ", "Mango, Banana, Kiwi" ),
"drinks"     => explode( ", ", "Milk, Tea, Coffee" ),
];

// print_r( $food );

//echo $food["drinks"][1];

array_push( $food["drinks"], "Orange Juice" );
// print_r( $food );

$sample = [
'test' => [
'test-again' => [
'a',
'b',
'c',
'd',
],
],
];

// echo $sample['test']['test-again'][2];

$sample2 = [
[1, 2, 3],
[10, 20, 30, 40],
[100, 200, 300, 400, [5, 10, 15]],
];

// print_r( $sample2 );

echo $sample2[2][4][1];

$student = [
"fname"  => "Mosabbir",
"lname"  => "Rehan",
"age"    => "34",
"batch"  => "B9",
"course" => "Asp.net",
];

print_r( $student );
echo PHP_EOL;
echo $student['batch'];
echo PHP_EOL;

$serialized = serialize( $student );
echo $serialized;
echo PHP_EOL;

$studentArray = unserialize( $serialized );
print_r( $studentArray );
echo PHP_EOL;

$jsonEncodeStudent = json_encode( $student );
echo $jsonEncodeStudent;
echo PHP_EOL;

$jsonDecodeStudent = json_decode( $jsonEncodeStudent, true );
print_r( $jsonDecodeStudent );

$person = [
"fname" => "Mosabbir",
"lname" => "Rehan",
];

$newPerson = &$person;
$newPerson['lname'] = "Hossain";
print_r( $person );
print_r( $newPerson );

echo PHP_EOL;

function printData( &$person )
{
$person['lname'] = "Chowdhury";
print_r( $person );
}

printData( $person );
print_r( $person );

$person = [
"fname" => "Mosabbir",
"lname" => "Rehan",
];

print_r( $person );

unset( $person["lname"] );
print_r( $person );

$name = '';

if ( isset( $name ) ) {
echo "Name is set";
} else {
echo "Not set";
}

echo PHP_EOL;

if ( empty( $name ) ) {
echo "Name is empty";
} else {
echo "Name is not empty";
}

echo PHP_EOL;

if ( isset( $name ) && ( is_numeric( $name ) || $name != '' ) ) {
echo "Name is set and it's not empty";
} else {
echo "Name is either not set or it's empty";
}

$fruits = ["apple", "banana", "orange", "kiwi", "mango"];

$someFruits = array_slice( $fruits, 2, 2, true );
$someFruits = array_slice( $fruits, -4, 2, true );
print_r( $someFruits );

$random = ["a" => 12, "b" => 15, "c" => 56, "d" => 26, 12 => 78, "e" => 89];

$randomData = array_slice( $random, 2, 3, true );
print_r( $randomData );

$fruits = ["apple", "banana", "orange", "kiwi", "mango"];

$someFruits = array_splice( $fruits, 2, 2, ["jackfruit", "pineapple"] );

print_r( $fruits );
print_r( $someFruits );

$fruits = ["apple", "banana", "orange", "kiwi", "mango"];

$random = ["a" => 12, "b" => 15, "c" => 56, "d" => 26, 12 => 78, "e" => 89];

$newFruits1 = array_slice( $fruits, 2, null, true );
$newFruits2 = array_slice( $fruits, 0, 2 );

$newFruits3 = array_merge( $newFruits1, $newFruits2 );

print_r( $newFruits1 );
print_r( $newFruits2 );
print_r( $newFruits3 );

$newFruitsPlus = $newFruits1 + $newFruits2;
print_r( $newFruitsPlus );

$random = ["a" => 12, "b" => 15, "c" => 56, "d" => 26, 12 => 78, "e" => 89];

$r1 = array_slice( $random, 0, 2, true );
$r2 = array_slice( $random, 2, null, true );
$r3 = ["j" => 2, "k" => 5];

$randomData = array_splice( $random, 2, 2, ["j" => 2, "k" => 5] );
$randomDataCorrect = $r1 + $r2 + $r3;

print_r( $random );
print_r( $randomData );
print_r( $randomDataCorrect );

$fruits = ["a" => "apple", "b" => "banana", "c" => "orange", "d" => "kiwi", "e" => "mango"];

arsort( $fruits );
print_r( $fruits );

$fruits = ["a" => "apple", "b" => "banana", "c" => "orange", "d" => "kiwi", "e" => "mango"];
$numbers = [1, 5, 7, "2", 55, 10, 56, 25, 29];

if ( in_array( 2, $numbers, true ) ) {
echo "2 is available in the array";
}

// echo array_search( 2, $numbers );

if ( key_exists( "d", $fruits ) ) {
echo "key d exists";
}

$numbers1 = [5, 10, 15, 20, 25, 30, 35];
$numbers2 = [15, 30, 45, 60, 75, 90, 105];

$fruits1 = ["a" => "apple", "b" => "banana", "c" => "orange"];
$fruits2 = ["a" => "grape", "b" => "banana", "c" => "kiwi", "d" => "orange", "e" => "mango"];

// $intersect = array_intersect( $numbers1, $numbers2 );
// $intersectf = array_intersect_assoc( $fruits1, $fruits2 );
// print_r( $intersect );
// print_r( $intersectf );

$diff = array_diff( $numbers1, $numbers2 );
$difff = array_diff_assoc( $fruits1, $fruits2 );

print_r( $diff );
print_r( $difff );

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

function square( $n )
{
printf( "The square of %d is %d\n", $n, $n * $n );
}

function cube( $n )
{
return $n * $n * $n;
}
function even( $n )
{
return $n % 2 == 0;
}
function odd( $n )
{
return $n % 2 != 0;
}

array_walk( $numbers, 'square' );
$cubedArr = array_map( 'cube', $numbers );
print_r( $cubedArr );

$evenNumbers = array_filter( $numbers, 'even' );
print_r( $evenNumbers );
$oddNumbers = array_filter( $numbers, 'odd' );
print_r( $oddNumbers );

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sum( $oldValue, $newValue )
{

if ( $newValue % 2 != 0 ) {
return $oldValue + $newValue;
}

return $oldValue;
}

echo array_reduce( $numbers, 'sum' );

$numbers = [1, 2, 3];

list( $first, $second, $third ) = $numbers;
echo $second;

// $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// for ( $i = 1; $i <= 10; $i++ ) {
//     echo $i . "\n";
// }

// $newNums = range( 1, 10, 1 );
// print_r( $newNums );

// foreach ( range( 1, 10, 2 ) as $num ) {
//     echo $num . "\n";
// }

$numbers = range( 32, 80, 1 );
print_r( $numbers );

echo count( $numbers );
echo PHP_EOL;

echo mt_rand( 32, 80 );

shuffle( $numbers );
print_r( $numbers );

echo $numbers[2];

$fruits2 = ["a" => "grape", "b" => "banana", "c" => "kiwi", "d" => "orange", "e" => "mango"];

// $_fruits2 = $fruits2;
// shuffle( $_fruits2 );
// print_r( $_fruits2 );

$key = array_rand( $fruits2 );
echo $key;
echo PHP_EOL;
echo $fruits2[$key];

$name = "Rakib";

echo "His name is {$name}\n\t New line";
echo PHP_EOL;

$heredoc = <<<'EOD'
His name
is {$name} \n \t
New Line
EOD;

echo $heredoc;

echo ord( 'A' );
echo PHP_EOL;
echo ord( 'A' );
echo PHP_EOL;
echo chr( 13 );
echo PHP_EOL;
echo chr( 98 );
echo PHP_EOL;

$str = "Hello World";

echo substr( $str, -5, 5 );

$str = "Hello World";
echo strrev( $str );

echo PHP_EOL;

$len = strlen( $str );

for ( $i = $len - 1; $i >= 0; $i-- ) {
echo $str[$i];
}

echo PHP_EOL;

for ( $i = 1; $i <= $len; $i++ ) {
echo $str[$i * -1];
}

$str = "Hello World,How are you?";
$parts = explode( " ", $str );
print_r( $parts );

echo PHP_EOL;
$joined = implode( " ", $parts );
echo $joined;

echo PHP_EOL;

$parts2 = str_split( $str );
print_r( $parts2 );

echo PHP_EOL;

$parts3 = strtok( $str, " ," );
print_r( $parts3 );

echo PHP_EOL;

while ( $parts3 !== false ) {
echo $parts3 . "\n";
$parts3 = strtok( " ," );

}

$parts4 = preg_split( "/ |,/", $str );
print_r( $parts4 );

$str = "Quick brown fox jump over the lazy dog";
$offset = strpos( $str, "A" );

if ( $offset !== false ) {
echo "Word was found!\n";
} else {
echo "Word was not found!";
}

$str = "Quick Brown fox jump over the lazy Dog";
$str = str_ireplace( ["brown", "dog"], ["red", "cat"], $str, $count );

echo $str;
echo PHP_EOL;
echo "Total Replacement {$count}";

$str = " Hello \n";
$str = trim( $str, ' ' );
echo $str;
echo "Data";

$str = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

$newStr = wordwrap( $str, 26 );
echo $newStr;

$str = "Lorem Ipsum is simply\n dummy text of the printing and typesetting\n industry. Lorem Ipsum has been the industry's standard dummy\n text ever since the 1500s, when an unknown\n printer took a galley of type and scrambled it to\n make a type specimen book.";
$newStr = nl2br( $str );
echo $newStr;

$person = "Mosabbir Rehan 01749291863 rehanmosabbir@gmail.com";

$parts = sscanf( $person, "%s %s %11s %s", $fname, $lname, $mobile, $email );

echo $email;
echo PHP_EOL;

$hexColor = "#FF06DD";

$parts2 = sscanf( $hexColor, "#%2x %2x %2x", $red, $green, $blue );
echo $green;

$fruits = ["apple", "banana", "cherry"];
echo implode( ",", $fruits );

$str = "The quick brown fox jumped over the lazy dog";

function longestWord( $str )
{
$strarr = explode( " ", $str );
$res = "";

foreach ( $strarr as $word ) {

if ( strlen( $word ) > strlen( $res ) ) {
$res = $word;
}

}

return $res;

}

echo longestWord( $str );

$x = 4;
$y = 5;

function test()
{
$GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
// $x = $x + $y;
}

test();
echo $x;

echo rand( 10, 100 );
echo PHP_EOL;
define( "GREETINGS", "Welcome to w3schools.com" );
function myTest()
{
echo GREETINGS;
}
mytest();

$x = ['a' => "apple", 'b' => "Mango"];
$y = ['c' => "guava", 'd' => "pineapple"];

print_r( $x + $y );

$color = "blue";
echo $color = $color ?? "red";

$t = date( "H" );
echo $t;

if ( $t < 20 ) {
echo "Have a good day.";
}

function sum( float $x, float $y ): int
{
return (int) ( $x + $y );
}

echo sum( 4.4, 10.6 );

function test( &$num )
{
return $num += 5;
}

$num = 2;
test( $num );
echo $num;

$age = ["Mosabbir" => "34", "Rokti" => "33", "Mahirah" => "4"];

foreach ( $age as $key => $value ) {
echo "{$key} => {$value}";
echo PHP_EOL;
}

$cars = [
["Volvo", 22, 18],
["BMW", 15, 13],
["Saab", 5, 2],
["Land Rover", 17, 15],
];

for ( $i = 0; $i < count( $cars ); $i++ ) {

for ( $j = 0; $j < count( $cars[$i] ); $j++ ) {
echo $cars[$i][$j];
echo PHP_EOL;
}

echo "================";
echo PHP_EOL;
}

$x = 23;
$y = 12;

function addition()
{
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
 */

// echo $_SERVER['SERVER_NAME'];

// echo $_SERVER['QUERY_STRING'];

// for ( $i = 1; $i <= 5; $i++ ) {

//     for ( $j = 1; $j <= $i; $j++ ) {

//         echo " * ";

//     }

//     echo PHP_EOL;

// }

// for ( $i = 1; $i <= 5; $i++ ) {

//     for ( $j = 1; $j <= $i; $j++ ) {

//         echo $i . " ";

//     }

//     echo PHP_EOL;

// }

// for ( $i = 1; $i <= 5; $i++ ) {

//     for ( $j = 1; $j <= $i; $j++ ) {

//         echo $j . " ";

//     }

//     echo PHP_EOL;

// }

// for ( $i = 5; $i >= 1; $i-- ) {

//     for ( $j = 1; $j <= $i; $j++ ) {

//         echo " * ";

//     }

//     echo PHP_EOL;

// }

// for ( $i = 5; $i >= 1; $i-- ) {

//     for ( $j = 1; $j <= $i; $j++ ) {

//         echo $i . " ";

//     }

//     echo PHP_EOL;

// }

for ( $i = 5; $i >= 1; $i-- ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo $j . " ";

    }

    echo PHP_EOL;
}
