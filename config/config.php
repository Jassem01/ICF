<?php
	// Database credentials
	define('DB_SERVER', 'sql105.ezyro.com');
	define('DB_USERNAME', 'ezyro_29403345');
	define('DB_PASSWORD', 'tmqw7zkb');
	define('DB_NAME', 'ezyro_29403345_db');

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}