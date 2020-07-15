<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$hostName = "localhost";
$username = "root";
$password ="";
$dbname = "phpday02airlines";

$conn = mysqli_connect($hostName, $username, $password, $dbname);

if(!$conn){
echo "error";}
else {echo "success";} 

// var_dump($conn);

// $sql = "CREATE DATABASE $dbname";

// $sql = "CREATE TABLE Users (
// user_id INT(6) AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(20) NOT NULL,
// lastname VARCHAR(20) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )" ;
$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('Bruno', 'M', 'john@doe.com'),('Julien', 'M', 'john@doe.com'),('Sylvain', 'M', 'john@doe.com') ";

if  (mysqli_query($conn, $sql)) {
   echo "Database $dbname created successfully! \n";
} else {
   echo "Error creating database $dbname: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

?>

</body>
</html>