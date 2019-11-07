<?php
    define('APP_ROOT_DIR', 'C:/wamp64/www/Assignment2' );

    //setting the data constants
    define('DB_USER', 'root');
    define('DB_NAME', 'test_uwi');
    define('DB_PASS', 'root');
    define('DB_HOST', 'localhost');

    //connect to database
    // $host = 'localhost';
	// $username = 'root';
	// $password = 'root';
	// $database = 'test_uwi';
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


	//$conn is outr database object
	if(!$conn)
	{
		die('Cannot connect to server 2');
	}
?>