<?php 
	$host= "localhost";
	$username = "root";
	$pw = "";
	$db = "phpday02airlines";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}
	$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$email = $_POST["email"];

	$sql = "INSERT INTO users (firstname, lastname, email) VALUES('$fname','$lname','$email')";

	if(!mysqli_query($conn,$sql)) {
		echo "querry error";
	}
	else {
		echo "insert success";
	}

 ?>
