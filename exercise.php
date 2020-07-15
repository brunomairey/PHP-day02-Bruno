<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="exercise.php" method="post">
	Name <input type="text" name="name"> <br>
Surname <input type="text" name="surname">
<input type="submit" value="Submit" name="submit">
</form>
<hr>
<form action="exercise.php" method="post">
Number 1 <input type="number" name="number1"> / <br>
Number 2 <input type="number" name="number2">
<input type="submit" value="Submit" name="divide">
</form>

<?php
if (isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$surname = $_POST["surname"];

	if ($name && $surname) {

		echo "Welcome $name $surname";
	}
else if ($name) {
	echo "please insert your surname";
}
else if ($surname) {
	echo "please insert your name";
}
else {
	echo "please insert your name and your surname";
}
}

if (isset($_POST["divide"]))
{
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];

	if ($number1 && $number2) {
function divide(){
	global $number1;
	global $number2;
	$result = $number1 / $number2;
	echo "The result of the division is $result";
	return $result;
}
divide();

}
else {
	echo "please fulfilled the field";
}
}


?>
</body>
</html>