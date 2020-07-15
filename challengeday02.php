<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="challengeday02.php" method="post">
	<input type="text" placeholder="img" name="img"><br>
	<input type="text" placeholder="brand" name="brand"><br>
	<input type="text" placeholder="model" name="model"><br>
	<input type="number" placeholder="price" name="price" step="0.01"><br>
	<input type="text" placeholder="location" name="location"><br>
	<label for="availability">Availability</label>
                        <select name="availability">
                            <option selected>true</option>
                            <option>false</option>
                       </select><br>
                
	<input type="submit" value="submit" name="submit">

<!-- CREATE TABLE Cars (car_id INT(6) AUTO_INCREMENT PRIMARY KEY,
img VARCHAR(100) NOT NULL,
brand VARCHAR(30) NOT NULL,
model VARCHAR(30) NOT NULL,
price decimal (6,2),
location VARCHAR(30) NOT NULL,
availability enum('true','false')) -->
	<?php 

	if (isset($_POST["submit"])) {

	$host= "localhost";
	$username = "root";
	$pw = "";
	$db = "phpday02airlines";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}

	$img = $_POST["img"];
	$brand = $_POST["brand"];
	$model = $_POST["model"];
	$price = $_POST["price"];
	$location = $_POST["location"];
	$availability = $_POST["availability"];

	$sql = "INSERT INTO `cars` (`img`, `brand`, `model`, `price`, `location`, `availability`) VALUES ('$img','$brand','$model','$price','$location','$availability')";

	if(!mysqli_query($conn,$sql)) {
		echo "querry error";
	}
	else {
		echo "insert success";
	}
}
else { echo "submit datas";}
 
 ?>

</body>
</html>