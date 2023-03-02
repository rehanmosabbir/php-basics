<?php
/*
class Human
{
public $name;
public $age;
public function __construct( $name, $age = 0 )
{
echo "Object is created\n";
$this->name = $name;
$this->age = $age;
}

public function sayHi()
{
echo "{$this->name}\n";
$this->sayName();
}

public function sayName()
{

if ( $this->age ) {

echo "I'm {$this->name} and I'm {$this->age} years old.\n";
} else {
echo "I'm {$this->name} and I don't know how old I am\n";

}

}

}

// class Cat

// {

//     public function sayHi()

//     {

//         echo "Meow\n";

//     }

// }

// class Dog

// {

//     public function sayHi()

//     {

//         echo "Woof\n";

//     }
// }

$h1 = new Human( "Mosabbir", 34 );
$h1->sayName();
$h1 = new Human( "Rojina" );
$h1->sayName();

// $c1 = new Cat();

// $c1->sayHi();

// $d1 = new Dog();
// $d1->sayHi();

class Fund
{
private $fund;

public function __construct( $initialFund = 0 )
{
$this->fund = $initialFund;
}

public function addFund( $money )
{
$this->fund += $money;
}
public function deductFund( $money )
{
$this->fund -= $money;
}
public function getFund()
{
echo "Total fund is {$this->fund}";
}
}

$fund1 = new Fund( 100 );
$fund1->addFund( 100 );

$fund1->getFund();

class RGB
{
private $color;
private $red;
private $green;
private $blue;

public function __construct( $colorCode = '' )
{
$this->color = ltrim( $colorCode, "#" );
$this->parseRGB();
}

public function setColor( $colorCode )
{
$this->color = ltrim( $colorCode, "#" );
$this->parseRGB();

}

public function getColor()
{
return $this->color;
}

private function parseRGB()
{

if ( $this->color ) {

list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, "%02x%02x%02x" );
} else {
list( $this->red, $this->green, $this->blue ) = [0, 0, 0];
}

}

public function readRGBColor()
{
echo "Red = {$this->red}\n Green = {$this->green}\n Blue = {$this->blue}\n";
}

public function getRGBColor()
{
return [$this->red, $this->green, $this->blue];
}

public function getRedColor()
{
echo "Red = {$this->red}\n";
}

public function getGreenColor()
{
echo "Green = {$this->green}\n";
}

public function getBlueColor()
{
echo "Blue = {$this->blue}\n";
}

}

$myRGB = new RGB( "#ff0000" );
$myRGB->getRedColor();

class ParentClass
{
protected $name;

public function __construct( $name )
{
$this->name = $name;
}

public function sayHi()
{
echo "Hi from {$this->name}\n";
}
}

class childClass extends ParentClass
{
public function sayHi()
{
parent::sayHi();
echo "Hello\n";
}
}

$cc = new childClass( "Rehan" );
$cc->sayHi();

class Shape
{
protected $name;
protected $area;

public function __construct( $name )
{
$this->name = $name;
$this->calculateArea();
}

public function getArea()
{
echo "This {$this->name}'s area is {$this->area}";
}

public function calculateArea()
{}
}

class Triangle extends Shape
{
private $a, $b, $c;

public function __construct( $a, $b, $c )
{
$this->a = $a;
$this->b = $b;
$this->c = $c;
Parent::__construct( "Triangle" );
}

public function calculateArea()
{
$perimeter = ( $this->a + $this->b + $this->c ) / 2;
$this->area = sqrt( $perimeter * ( $perimeter - $this->a ) * ( $perimeter - $this->b ) * ( $perimeter - $this->c ) );
}
}

class Rectangle extends Shape
{
private $a, $b;

public function __construct( $a, $b )
{
$this->a = $a;
$this->b = $b;
Parent::__construct( "Rectangle" );
}

public function calculateArea()
{
$this->area = $this->a * $this->b;
}
}

$myTriangle = new Triangle( 3, 4, 5 );
$myTriangle->getArea();
echo PHP_EOL;
$myRectangle = new Rectangle( 3, 4 );
$myRectangle->getArea();

abstract class Shape
{
abstract public function calculatePerimeter();
abstract public function calculateArea();
}

class Rectangle extends Shape
{
private $base;
private $height;
public $area;
public $perimeter;

public function __construct( $base, $height )
{
$this->base = $base;
$this->height = $height;
}
public function setBase( $base )
{
$this->base = $base;
}
public function setHeight( $height )
{
$this->height = $height;
}
public function calculatePerimeter()
{
$this->perimeter = 2 * ( $this->base + $this->height );
}
public function calculateArea()
{
$this->area = $this->base * $this->height;
}
}

class Triangle extends Shape
{
private $a;
private $b;
private $c;
public $area;
public $perimeter;

public function __construct( $a, $b, $c )
{
$this->a = $a;
$this->b = $b;
$this->c = $c;
}

public function calculatePerimeter()
{
$this->perimeter = ( $this->a + $this->b + $this->c ) / 2;
}
public function calculateArea()
{
$this->calculatePerimeter();
$this->area = $this->perimeter * ( $this->perimeter - $this->a ) * ( $this->perimeter - $this->b ) * ( $this->perimeter - $this->c );
}
}

$myTriangle = new Triangle( 2, 3, 4 );
$myTriangle->calculateArea();
echo $myTriangle->area;
echo PHP_EOL;
$myRectangle = new Rectangle( 2, 3 );
$myRectangle->calculateArea();
echo $myRectangle->area;

abstract class OurClass
{
final public function doSomething()
{
echo "Doing Something";
}
}

class MyClass extends OurClass
{

}

class Shape
{}

class Shapes
{
private $shapes;

public function __construct()
{
$this->shapes = [];
}

public function addShape( Shape $shape )
{
array_push( $this->shapes, $shape );
}

public function getShape()
{
return count( $this->shapes );
}
}

class Triangle extends Shape
{

}
class Rectangle extends Shape
{

}
class Student
{

}

$myShapes = new Shapes();
$myShapes->addShape( new Triangle() );
$myShapes->addShape( new Rectangle() );
//$myShapes->addShape( new Student() );

echo $myShapes->getShape();

interface AnimalBase
{
public function canEat();
public function canWalk();
public function canHear();
}

class Animal implements AnimalBase
{
public function canEat()
{}
public function canWalk()
{}
public function canHear()
{}
}

interface HumanBase extends AnimalBase
{
public function canTalk();
}

class Human implements HumanBase
{
public function canEat()
{}
public function canWalk()
{}
public function canHear()
{}
public function canTalk()
{}
}

$cat = new Animal();
echo $cat instanceof AnimalBase;
echo PHP_EOL;
$rahim = new Human();
echo $rahim instanceof HumanBase;

class MathCalculation
{
private $name;
static $number;
public function fibonacci( $number )
{
echo "Calculating fibonacci upto {$number}\n";
self::factorial( 10 );
}
public static function factorial( $number )
{
self::$number = "ABCD";
echo $number;
echo PHP_EOL;
echo "Calculating factorial of {$number}\n";
}
}

$mathc = new MathCalculation();
$mathc->fibonacci( 5 );

MathCalculation::factorial( 3 );

class A
{
protected static $name;
public static function sayHi()
{
self::$name = "ABCD";
echo "Hello from A\n";
}
}

class B extends A
{
public static function sayHi()
{
parent::sayHi();
echo parent::$name;
echo "\nHello from B\n";
}
}

B::sayHi();

define( "OK", 123 );
const CITY = "Dhaka";

echo OK;
echo CITY;

class MyClass
{
const CITY = "Dhaka";

public function sayHi()
{
echo "Hi from " . $this::CITY;
}
}

$mc = new MyClass();
echo $mc::CITY;

$mc->sayHi();

class Student
{
private $name;
private $age;
private $class;

public function __construct( $name = '', $age = '', $class = '' )
{
$this->name = $name;
$this->age = $age;
$this->class = $class;
}

public function __get( $prop )
{
return $this->$prop;
}
public function __set( $prop, $value )
{
$this->$prop = $value;
}

// public function getName()
// {
//     return $this->name;
// }
// public function setName( $name )
// {
//     $this->name = $name;

// }
// public function getAge()
// {
//     return $this->age;
// }
// public function setAge( $age )
// {
//     $this->age = $age;

// }
// public function getClass()
// {
//     return $this->class;
// }
// public function setClass( $class )
// {
//     $this->class = $class;

// }
}

$rehan = new Student( "Mosabbir", "18", "10" );
echo $rehan->name;

class DistrictCollection implements IteratorAggregate, Countable
{
private $districts;

public function __construct()
{
$this->districts = [];
}

public function add( $district )
{
array_push( $this->districts, $district );
}

public function getDistricts()
{
return $this->districts;
}

public function getIterator(): Traversable
{
return new ArrayIterator( $this->districts );
}

public function count(): int
{
return count( $this->districts );
}

}

$myDistricts = new DistrictCollection();
$myDistricts->add( "Dhaka" );
$myDistricts->add( "Jashore" );
$myDistricts->add( "Khulna" );
$myDistricts->add( "Barishal" );
$myDistricts->add( "Chuadanga" );

foreach ( $myDistricts as $myDistrict ) {
echo $myDistrict . "\n";
}

echo count( $myDistricts );

class Color
{
public $color;

public function __construct( $color )
{
$this->color = $color;
}

public function setColor( $color )
{
$this->color = $color;
}
}

class FavColor
{
public $data;
public $color;

public function __construct( $data, $color )
{
$this->data = $data;
$this->color = new Color( $color );
}

public function updateColor( $color )
{
$this->color->setColor( $color );

}

public function __clone()
{
$this->color = clone $this->color;
}
}

$fc1 = new FavColor( "some data", "red" );
print_r( $fc1 );
$fc2 = clone $fc1;
print_r( $fc2 );

$fc2->updateColor( "green" );
print_r( $fc1 );
print_r( $fc2 );

class Color
{
public $color;

public function __construct( $color )
{
$this->color = $color;
}

public function setColor( $color )
{
$this->color = $color;
}

public function __toString()
{
return "The color is {$this->color}";
}
}

$c = new Color( "red" );
echo $c;

class Planet
{
public $name;

public function __construct( $name )
{
$this->name = $name;
}

}

$e = new Planet( "Earth" );
$e1 = new Planet( "Earth" );
$e2 = $e1;
$m = new Planet( "Mars" );

if ( $e2 === $e1 ) {
echo "Similar";
} else {
echo "Not Similar";
}

class Planet
{
public static function echoName()
{
echo static::getName();
}
public static function getName()
{
return "Planet";
}

}

class Earth extends Planet
{
public static function getName()
{
return "Earth";
}
}

Earth::echoName();

class MotorCycle
{
private $parameters;

public function __construct( $displacement, $capacity, $mileage )
{
$this->parameters = [];
$this->parameters["displacement"] = $displacement;
$this->parameters["capacity"] = $capacity;
$this->parameters["mileage"] = $mileage;
}

// public function getDisplacement()

// {

//     return $this->parameters["displacement"];

// }

// public function setDisplacement( $displacement )

// {

//     $this->parameters["displacement"] = $displacement;
// }

public function __isset( $name )
{

if ( !isset( $this->parameters[$name] ) ) {
echo "Not Found";
} else {
echo "Found";
}

}

public function __unset( $name )
{
unset( $this->parameters[$name] );
}

public function __get( $name )
{
return $this->parameters[$name];
}

public function __set( $name, $value )
{
$this->parameters[$name] = $value;
}

public function __call( $name, $arguments )
{

if ( "run" === $name ) {
echo "I am running at {$arguments[0]}";
} else {
echo "I am running";
}

}

public static function __callStatic( $name, $arguments )
{
echo "static running\n";
}

}

MotorCycle::run();

$pulsar = new MotorCycle( "150cc", "12ltr", "150kmph" );
// echo $pulsar->getDisplacement();
$pulsar->displacement = "160cc";
echo PHP_EOL;

echo $pulsar->displacement;
echo PHP_EOL;

if ( isset( $pulsar->tireSize ) ) {
echo $pulsar->tireSize;
}

echo PHP_EOL;

print_r( $pulsar );
unset( $pulsar->displacement );
print_r( $pulsar );

$pulsar->run( "110kmph" );
 */

class Car
{
    private $make;
    private $model;
    private $year;

    public function __construct( $make, $model, $year )
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make()
    {
        return $this->make;
    }
    public function set_make( $make )
    {
        $this->make = $make;
    }
    public function get_model()
    {
        return $this->model;
    }
    public function set_model( $model )
    {
        $this->model = $model;
    }
    public function get_year()
    {
        return $this->year;
    }
    public function set_year( $year )
    {
        $this->year = $year;
    }

    public function display_info()
    {
        echo "Car make : {$this->make}\nCar model : {$this->model}\nCar year : {$this->year}\n";
        echo PHP_EOL;
    }
}

$car = new Car( "Toyota", "Corolla", "2015" );
$car->display_info();

$car->set_make( "Honda" );
$car->set_model( "Civic" );
$car->display_info();
