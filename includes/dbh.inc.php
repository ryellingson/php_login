<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Used for local development
// $serverName = "localhost";
// $dBUsername = "root";
// $dBPassword = "";
// $dBName = "loginsystem";

// $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

//Get Heroku ClearDB connection information
try {
  $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $cleardb_server = $cleardb_url["host"];
  $cleardb_username = $cleardb_url["user"];
  $cleardb_password = $cleardb_url["pass"];
  $cleardb_db = substr($cleardb_url["path"],1);
  $active_group = 'default';
  $query_builder = TRUE;
  // Connect to DB
  $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
} catch(\Exception $e) {
	echo "Exception: " . $e->getMessage();
}

$loggableConfigVariable = $config;

unset($loggableConfigVariable['pass']);

file_put_contents("config.deletemewhendone.log", json_encode($loggableConfigVariable, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() );
}