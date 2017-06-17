<?php
$name=$_GET["name"];
$gender=$_GET["gender"];
$email=$_GET["email"];
$tel=$_GET["tel"];
$city=$_GET["city"];
$style=$_POST["style"];

$link = @mysqli_connect(
			'localhost',
			'root',
			'123456',
			'php2017');


if($link){
	echo"DB connected!!<br>";
}else{
	echo"DB connection failed<br>";
}

$sql2="INSERT INTO homework (name, gender, email, tel, city, style) VALUE('$name', '$gender', '$email', '$tel', '$city', 'style')";
$result=mysqli_query($link, $sql2);

$result=mysqli_query($link, "SELECT * FROM homework");

echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["no"];
	$id=$row["no"];
	echo "</td><td>";
	echo $row["name"];
	$name=$row["name"];
	echo "</td><td>";
	echo $row["gender"];
	$gender=$row["gender"];
	echo "</td><td>";
	echo $row["email"];
	$email=$row["email"];
	echo "</td><td>";
	echo $row["tel"];
	$tel=$row["tel"];
	echo "</td><td>";
	echo $row["city"];
	$city=$row["city"];
	echo "</td><td>";
	echo $row["style"];
	$style=$row["style"];
	echo "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>