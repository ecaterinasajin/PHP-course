<?php
// 1. Magic constants
	echo __FILE__ . '<br>';
	echo __DIR__ . '<br>';

// 2. Create directory
//	mkdir('test');

// 3. Rename directory
//	rename('test', 'test2');

// 4. Delete directory
//	rmdir('test2');

// 5. Read files and folders inside directory
//	$files = scandir('./');
//	echo '<pre>';
//		var_dump($files);
//	echo '</pre>';

// 6. file_get_contents, file_put_contents
	$lorem = file_get_contents('lorem.txt');
	echo $lorem;
	echo '<br>';
	file_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);

//7. File system functions: file_exists, is_dir, filemtime, filesize, disk_free_space, file
