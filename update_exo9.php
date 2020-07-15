


<?php 
	$host= "localhost";
	$username = "root";
	$pw = "";
	$db = "phpday02airlines";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}
	
	if (isset($_POST["submit"]))
{
	// $user_id = $_POST["user_id"];
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$email = $_POST["email"];
	$user_id = $_POST["id"];
}
// 	if ($name && $surname) {

// 		echo "Welcome $name $surname";
// 	}
// else if ($name) {
// 	echo "please insert your surname";
// }
// else if ($surname) {
// 	echo "please insert your name";
// }
// else {
// 	echo "please insert your name and your surname";
// }
// }






	$sql = "UPDATE `users` SET `firstname` = '$fname', `lastname` = '$lname', `email` = '$email' 
where `user_id` = $user_id";



	if(!mysqli_query($conn,$sql)) {
		echo "querry error";
	}
	else {
		echo "insert success";
	}

 ?>