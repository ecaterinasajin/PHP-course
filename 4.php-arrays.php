<?php

//A. PHP Array

// 1. How to create php array
	$fruits = ["Banana", "Apple", "Orange"];

// 2. Print the whole array
	echo '<pre>';
		var_dump($fruits); 
	echo '</pre>';

// 3. Get and set element by index
	echo $fruits[1].'<br>'; //get
	
	$fruits[0] = "Peach"; //set

// 4. Check if array has element at index 2
	echo '<pre>';
		var_dump(isset($fruits[2]));  // Change age into 5
	echo '</pre>';

// 5. Append element
	$fruits[] = 'Peach';
	echo $fruits[3].'<br>';

// 6. Print the length of the array
	echo count($fruits).'<br>';

// 7. Add and remove element at the end of the array
	array_push($fruits, 'Foo');

	array_pop($fruits);

	echo '<pre>';
		var_dump($fruits);
	echo '</pre>';

// 8. Add and remove element at the beginning of the array
	array_unshift($fruits, 'Apple'); //add

	array_shift($fruits); //remove

// 9. Split the string into an array
	$string = "Banana,Apple,Peach";
	echo '<pre>';
		var_dump(explode(",", $string));
	echo '</pre>';

	print_r($fruits);

// 10. Combine array elements into string
	echo implode(",", $fruits).'<br>';

// 11. Check if element exist in the array
	echo '<pre>';
		var_dump(in_array('Apple', $fruits));
	echo '</pre>';

// 12. Search element index in the array
	echo '<pre>';
		var_dump(array_search("Peach", $fruits));
	echo '</pre>';

// 13. Merge two arrays
	$vegetables = ['Potato', 'Cucumber'];
	echo '<pre>';
		var_dump(array_merge($fruits, $vegetables));
		var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
	echo '</pre>';

// 14. Sorting of array (Reverse order also)
	sort($fruits); //sort, rsort, usort
	echo '<pre>';
		var_dump($fruits);
	echo '</pre>';

// 15. Filter, map, reduce of array
	$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
	$evens = array_filter($numbers, function($n){ // fn($n) => $n % 2 === 0
		return $n % 2 === 0;
	});
	echo '<pre>';
		var_dump($evens);
	echo '</pre>';

	$squares = array_map(fn($n) => $n + 1, $numbers);
	echo '<pre>';
		var_dump($squares);
	echo '</pre>';

	$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
	echo $sum.'<br>';


// B. Associative arrays

// 1. How to create an associative array
	$person = [
		'name' => 'Hloe',
		'surname' => 'Parker',
		'age' => 20,
		'hobbies' => ['Piano', 'Video Games'],
];

// 2. Get element by key
	echo $person['name'].'<br>';

// 3. Set element by key
	$person['channel'] = 'Parker';

// 4. Check if array has specific key
	echo '<pre>';
		var_dump(isset($person['age'])); 
	echo '</pre>';

// 5. Print the keys of the array
	echo '<pre>';
		var_dump(array_keys($person));
	echo '</pre>';

// 6. Print the values of the array
	echo '<pre>';
		var_dump(array_values($person));
	echo '</pre>';

// 7. Sorting associative arrays by values, by keys
	ksort($person); // ksort, krsort, asort, arsort
	echo '<pre>';
		var_dump($person);
	echo '</pre>';

// 8. Two dimensional arrays
	$todoItems = [
		['title' => 'Todo1', 'completed' => true],
		['title' => 'Todo 2', 'completed' => false],
	];

	echo '<pre>';
		var_dump($todoItems);
	echo '</pre>';
?>