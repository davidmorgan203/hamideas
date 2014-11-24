<?php
	$email = $_POST["mail"];
	$idea = $_POST["idea"];
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db('hamideas');
	
	$sql = "INSERT INTO ideas (email, idea)
       VALUES ('$email', '$idea')";

	
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
	mysql_close($conn);
	
?>