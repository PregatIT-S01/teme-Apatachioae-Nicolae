<?php

// Write a simple class that displays a message like “Hello, my name is Alex”, where “Alex” is an argument value of the
//method from the class.
class message {
    public $message = 'Hello, my name is ';
    public function introduce($name)
    {
        return $this->message.$name;
    }
}
$message = New message();
echo $message->introduce('Alex');
echo "<br>";

//Write classes that describe types of vehicles, starting from a base class and extending it.( advanced: at least 8 classes, 3
//abstract methods and 2 non-abstract
class Vehicle
{
    public string $brand;
    public function printItem($string)
    {
        echo ' ' . $string . PHP_EOL;
    }
}
class Renault extends Vehicle
{
    public string $motor;
    public function displayMotor()
    {
        return $this->motor;
    }
    public string $combustible;
    public function displayCombustible()
    {
        echo $this->combustible;
    }
    public string $body_break;
    public function displayBodyBreak()
    {
        echo $this->body_break;
    }
}

class Skoda extends Vehicle
{
    public string $motor;
    public function displayMotor()
    {
        return $this->motor;
    }
    public string $combustible;
    public function displayCombustible()
    {
        echo $this->combustible;
    }
    public string $body_break;
    public function displayBodyBreak()
    {
        echo $this->body_break;
    }
}

class BMW extends Vehicle
{
    public string $motor;
    public function displayMotor()
    {
        return $this->motor;
    }
    public string $combustible;
    public function displayCombustible()
    {
        echo $this->combustible;
    }
    public string $body_break;
    public function displayBodyBreak()
    {
        echo $this->body_break;
    }
}

$vehicle = new Renault();
$vehicle->printItem('Renault: ');
echo $vehicle->motor = 1.9;
echo $vehicle->combustible = " diesel";
echo $vehicle->body_break = " suv";
echo "<br>";

$vehicle = new Skoda();
$vehicle->printItem('Skoda: ');
echo $vehicle->motor = '3.0';
echo $vehicle->combustible = " benzina";
echo $vehicle->body_break = " break";
echo "<br>";

$renault = new Skoda();
$renault->printItem('BMW: ');
echo $renault->motor = '1.6';
echo $renault->combustible = " Gpl";
echo $renault->body_break = " hatchbreak";


