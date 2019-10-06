<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "placedb";

	$message = $_REQUEST['message'];
	$place = $_REQUEST['place'];
	$long_data = $_REQUEST['long_data'];
	$lat_data = $_REQUEST['lat_data'];
	$month = $_REQUEST['month'];
	$time = $_REQUEST['time'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed");
	}

	$sql = "INSERT INTO places(todo,place,latitude,longitude,month,timeinhours)
   	 VALUES('$message','$place','$lat_data','$long_data','$month','$time')";

	if ($conn->query($sql) === TRUE) {
	    echo "location added";
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

?>