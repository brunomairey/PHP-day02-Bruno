<?php 
	$host= "localhost";
	$username = "root";
	$pw = "";
	$db = "phpday02airlines";

	$conn = mysqli_connect($host, $username, $pw, $db);

	$sql = "SELECT * from users";

	$result = mysqli_query($conn, $sql);

if($result->num_rows == 0) {
	echo "no results";
} elseif ($result->num_rows ==1) {
	$row = $result->fetch_assoc();
	echo $row["firstname"];

}else {
	$rows = $result->fetch_all(MYSQLI_ASSOC);
	foreach($rows as $val){
		echo $val["firstname"] . "<br>";
	}

}



	// while($row = mysqli_fetch_assoc($result))
	// {
	// 	var_dump($row);
	// 	// printf("ID=%s %s (%s)<br>",
 //  //            $row[ "user_id"], $row["lastname"],$row["firstname"]);
	// 	}
		// echo  "Fetched data successfully\n";
		// mysqli_free_result($result);
		// mysqli_close($conn);

	

	?>