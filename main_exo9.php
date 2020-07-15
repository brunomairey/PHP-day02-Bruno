

<?php

// connection to database
error_reporting( ~E_DEPRECATED & ~E_NOTICE);
	$host= "localhost";
	$username = "root";
	$pw = "";
	$db = "phpday02airlines";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}
if(isset($_GET["id"]))
{
	$user_id= $_GET["id"];
	$sql = "SELECT * from `users` where `user_id` = {$user_id}";
	$result = mysqli_query($conn, $sql);
	$row = $result->fetch_assoc();

}
else{echo "error";}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="update_exo9.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['user_id']?>">
	<input type="text" placeholder="first_name" name="firstname" value="<?php echo $row['firstname']?>">
	<input type="text" placeholder="last_name" name="lastname" value="<?php echo $row['lastname']?>">
	<input type="text" placeholder="email" name="email" value="<?php echo $row['email']?>">
	<input type="submit"  name="submit" value="submit">


</body>
</html>