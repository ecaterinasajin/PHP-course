<?php

// 1. How to create a simple string:
	$string = "Hello, I am here!"; // 2. Extract into variable
	$string2 = 'Hello, I am there!'; // 3. Replace with variable
	echo $string . '<br>';
	echo $string2 . '<br>';

// 2. String concatenation:
	echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// 3. String functions:
	$string = "    Hello World      ";

	echo "1 - " . strlen($string) . '<br>' . PHP_EOL; //returns the length of a given string
	echo "2 - " . trim($string) . '<br>' . PHP_EOL; //removes whitespace and other predefined characters from both sides of a string
	echo "3 - " . ltrim($string) . '<br>' . PHP_EOL; //removes whitespace or other predefined characters from the left side of a string
	echo "4 - " . rtrim($string) . '<br>' . PHP_EOL; //removes whitespace or other predefined characters from the right side of a string
	echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL; //returns information about words used in a string
	echo "6 - " . strrev($string) . '<br>' . PHP_EOL; //used to reverse a string
	echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL; //used to convert a string into uppercase
	echo "8 - " . strtolower($string) . '<br>' . PHP_EOL; //used to convert a string into lowercase
	echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL; //make a string's first character uppercase
	echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL; //make a string's first character lowercase
	echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL; //uppercase the first character of each word in a string
	echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; //find the position of the first occurrence of a substring in a string
	echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL; //find the position of the first occurrence of a case-insensitive substring in a string
	echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL; //return part of a string
	echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; //replace all occurrences of the search string with the replacement string
	echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL; //used to replace all the occurrences of the search string or array of search strings by replacement string or array of replacement strings in the given string or array respectively

	$invoiceNumber = 100;
	$invoiceNumber2 = 123456;
	echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL; //pad a string to a certain length with another string
	echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
	echo str_repeat('Hello', 2) . '<br>' . PHP_EOL; //use to repeat a string

// 4. Multiline text and line breaks
	$longText = "
		Hello, my name is Ecaterina,
		I am 23 years old,
		I love my dog 
    ";
	echo $longText . '<br>' . PHP_EOL;
	echo nl2br($longText) . '<br>' . PHP_EOL;

// 5. Multiline text and reserve html tags
	$longText = "
		Hello, my name is <b>Ecaterina</b>
		I am <b>23</b> years old,
		I love my dog
	";
	echo "1 - " . $longText . '<br>';
	echo "2 - " . nl2br($longText) . '<br>';
	echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
	echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
	echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
	echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

?>
