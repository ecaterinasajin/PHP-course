<?php

// 1. Function which prints a message
	function hello()
	{
		echo 'Hello I am here!<br>';
	}

	hello(); 
	hello(); 
	hello(); 

// 2. Create sum of two functions
	function sum($a, $b)
	{
	echo ($a + $b) . '<br>'; //return sum instead of printing
	}

	sum(4,5); 
	sum(9,10); 

// 3. Create function to sum all numbers using ...$nums
	function sum1(...$nums)
	{
		$sum1 = 0;
		foreach ($nums as $num) $sum1 += $num;
		return $sum1;
	}
		echo sum(1, 2, 3, 4, 6);

// 4. Arrow functions
	function sum2(...$nums)
	{
		return array_reduce($nums, fn($coll, $n) => $coll + $n);
	}
	echo sum2(1, 2, 3, 4, 6);
?>
