<?php

	$servername = "localhost";
        $username = "root";
        $password = "12345678";
        $database = "oguzbank";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
