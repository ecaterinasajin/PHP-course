<?php

// PHP-course - variable

// Variable types: String, Integer, Float, Boolean, Null, Array, Object, Resource

// 1. Creating (Declaring) PHP Variables:
	$name = "Ecaterina";
	$age = 23;
	$isMale = false; 
	$height = 1.55;
	$salary = null;

// 2. How to print php variables:
	echo $name . '<br>';
	echo $age . '<br>';
	echo $isMale . '<br>';
	echo $height . '<br>';
	echo $salary . '<br>';

// 2.1 Print types of the variables
	echo gettype($name) . '<br>';
	echo gettype($age) . '<br>';
	echo gettype($isMale) . '<br>';
	echo gettype($height) . '<br>';
	echo gettype($salary) . '<br>';

// 2.2. Print the whole variable
	var_dump($name, $age, $isMale, $height, $salary);

// 3. How to change the value of the variable and print its type
	$name = false;
	echo gettype($name) . '<br>';

// 4. Variable checking functions:
	is_string($name); // false
	is_int($age); // true
	is_bool($isMale); // false
	is_double($height); // true

// 5. The function check if variable is defined:
	var_dump(isset($name));
	var_dump(isset($name2));
	echo '<br>';

// 10. How to define php constants:
	define('PI', 3.14);
	echo PI.'<br>';
	var_dump(defined('PI')); // defined(PI2)
	echo '<br>';

// 12. Using PHP built-in constants
	echo SORT_ASC.'<br>';
	echo PHP_INT_MAX.'<br>';

?>