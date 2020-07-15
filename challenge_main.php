<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title></title>
</head>
<body>
 <div class="row row-cols-2 mx-4 justify-content-around">
   <div class="card-deck my-4">         
<?php 
    $host= "localhost";
    $username = "root";
    $pw = "";
    $db = "phpday02airlines";

    $conn = mysqli_connect($host, $username, $pw, $db);

    $sql = "SELECT * from cars";

    $result = mysqli_query($conn, $sql);

if($result->num_rows == 0) {
    echo "no results";
} 
// elseif ($result->num_rows ==1) {
//     $row = $result->fetch_assoc();
//     echo $row["brand"];
// }
else 
{
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $value){
        echo 
         "<div class=\"card mb-4 bg-dark text-white text-center teaser hovereffect\">
                           <img src=\"" . $value["img"] . "\" class=\"card-img-top imageheight\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">" . $value["brand"] . "\n" . $value["model"] . "</h5> 
                                 
                                <p class=\"card-text text-left\"> is available for a price of ". $value["price"]  . "€ per day in " . $value["location"] .  "</p></div>"; 
    }

}

              
                   
       


?>
</div></div>


</body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>