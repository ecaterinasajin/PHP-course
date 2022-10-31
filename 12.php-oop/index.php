<?php

// 1. What is class and instance

	require_once './person.php';
	require_once './student.php';

//	$p = new Person('Ecaterina', 23, null);
//	echo $p->name.'<br>';
//	echo $p->age.'<br>';
//	echo $p->getSalary().'<br>';
//	$p->setSalary(100);
//	echo $p->getSalary().'<br>';

	$s = new Student("Ecaterina", '23', 1234);
	echo $s->name.'<br>';
