<?php

$id = $_POST["id"];
$source = $_POST["source"];
$destination = $_POST["destination"];
$time = $_POST["time"];
$price = $_POST["price"];

$servername = "localhost";
$username = "bob";
$password = "";
$db = "airways";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update addflightstable set source='$source', destination='$destination', time='$time', price='$price' where id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$source."-".$destination."-".$time."-".$price;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>



































