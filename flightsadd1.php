<?php
$student_id=10;

$servername = "localhost";
$username = "bob";
$password = "";
$db = "airways";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
	die("Connection failed ".$conn->connect_error);
}

$sql = "select * from addflightstabel where id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$source = $row["source"];
$destination = $row["destination"];
$time = $row["time"];
$price = $row["price"];

echo

"<html>
<body>

<form action='test.php' method='post'>
 ID: $id<br>
<input type='hidden' name='id' value='$id'>
price: $price<br>
Name: <input type='text' name='source' value='$source'><br>
Destination: <input type='text' name='destination' value='$destination'><br>
Time: <input type='text' name='time' value='$time'><br>
<input type ='submit'>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$conn->close();

?>