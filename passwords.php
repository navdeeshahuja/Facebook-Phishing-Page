<?php

$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'database');

$query="SELECT * FROM `table_name`";
$results=mysqli_query($con, $query);

while($row=mysqli_fetch_assoc($results))
{
	$e=$row['ad'];
	$p=$row['yusu'];

	echo "$e<br>$p";
	echo "<br><br><br>";
}

?>