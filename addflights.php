<?php
include('code.php');
$servername="localhost";
$username="root";
$password="";
$database="airways";

//session_start();
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){  
	 echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die ('Could not connect: '. mysqli_connect_error());  
}

if (isset($_POST['submit']))
{
$source=$_POST['source'];
$destination=$_POST['destination'];
$time=$_POST['time'];
$price=$_POST['price'];

// $trailer=$_POST['trailer'];
/*if(file_exists("newimg/".$_FILES['image']['name']))
{
  $filename=$_FILES['image']['name'];
  $_SESSION['status']="Image aleary Exits".$filename;
  header("Location:addmovies.php");
}
else
{*/
 //$sql = "INSERT INTO addmovies (image,mname,mdetails,mdescription,dname,pname,trailer) VALUES ('$image', '$mname', '$mdetails', '$mdescription','$dname', '$pname', '$trailer');";
$sql = "INSERT INTO `addflights`(`source`, `destination`, `time`, `price`) VALUES ('$source','$destination','$time','$price');";	
if(mysqli_query($conn, $sql))
  {   
	$message = "Record has been inserted successfully ";
}
else
{  
	$message = "Could not insert record"; 
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}

</style>
</head>
<body>

<h3>Add Flights</h3>

<div class="container">
<form action="" method="POST" enctype="multipart/form-data">

    <label for="mname">From:</label>
    <tr>
<td><select id="source" align="center" name="source">
<option value="None" disabled selected>------Select Source------</option>
<option value="Pune">Pune Airport</option>
<option value="Mumbai">Chh.shivaji maharaj international Airport in Mumbai</option>
<option value="Aurangabad">Aurangabad Airport</option>
<option value="Nagpur">Dr.Ambedkar international Airport in Nagpur</option>
<option value="Solapur">Solapur Airport</option>
<option value="Latur">Latur Airport</option>
<option value="Kolhapur">Kolhapur Airport</option>
<option value="Nanded">Nanded Airport</option>
<option value="Ratnagiri">Ratnagiri Airport</option>
<option value="Kerla">Kannur international Airport in kerla</option>
<option value="Nashik">Ozar Airport in Nashik</option>
</select>
</td>
</tr><br><br>

    <label for="mdetails">To:</label>
    <tr>
<td><select id="destination" align="center" name="destination">
<option value="None" disabled selected>------Select Destination------</option>
<option value="Pune">Pune Airport</option>
<option value="Mumbai">Chh.shivaji maharaj international Airport in Mumbai</option>
<option value="Aurangabad">Aurangabad Airport</option>
<option value="Nagpur">Dr.Ambedkar international Airport in Nagpur</option>
<option value="Solapur">Solapur Airport</option>
<option value="Latur">Latur Airport</option>
<option value="Kolhapur">Kolhapur Airport</option>
<option value="Nanded">Nanded Airport</option>
<option value="Ratnagiri">Ratnagiri Airport</option>
<option value="Kerla">Kannur international Airport in kerla</option>
<option value="Nashik">Ozar Airport in Nashik</option>
</select>
</td>
</tr><br><br>

    
    <label for="appt">Choose a time for Flight:</label>
    <input type="time" id="time" name="time" min="12:00" max="24:00" required>

    <label for="dirctorname">Price:</label>
    
    <input type="text" id="price" name="price" placeholder="Set Price.." required><br>
    
  <!--<input type="submit" name="submit" href="addflightstable.php">-->
  <button type="submit" class="submit" onclick="window.location.href='addflightstable.php';">Submit</button>
  </form>
</div>

</body>
</html>
