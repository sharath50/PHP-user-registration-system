<?php 

$connection = new mysqli('localhost' , 'root' , '123456' , 'practice_database');
if (!$connection){
	die('not connected ' . $connection->connect_error);
}

?>