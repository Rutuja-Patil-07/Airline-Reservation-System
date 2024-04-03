<?php
session_start();
$conn = mysqli_connect("localhost","root","","airways");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$fno=$_POST['fno'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$departing=$_POST['departing'];
$returning=$_POST['returning'];
$ticket=$_POST['ticket'];

$sql = "INSERT INTO `book`(`id`, `name`, `mob`, `email`, `password`, `fno`, `source`, `destination`, `departing`, `returning`, `ticket`) VALUES('$id','$name', '$mob','$email','$pw','$fno','$source', '$destination','$departing', '$returning','$ticket');";
if(mysqli_query($conn, $sql))
{  ?>
<script>
	alert("You have been successfully Booked a Ticket");
	</script>
<?php
}
else
{ 
	?> 
	<script>
	alert("You have not been successfully Booked a Ticket");
	</script>
	<?php 
}
	//echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<html>
<head>
<title>Transaction form</title>

<style type="text/css">
	html {
		background: url(airline3.jpg) no-repeat center center;
		background-size: cover;
	}
	#mainarea{
		width: 40%;
		height: 90%;
		margin: auto;
		border-radius: 25px;
		border: 2px solid blue;
		margin-top: 90px;
		padding-bottom: 10px;
		background-color: rgba(0,0,0,0.2);
	    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
	}
	#cancelform	{
		margin-top: 30px;
	}
	#radio-btn{
		margin:auto;
	}
	#radio-btn .btn{
		margin:20px 10px 20px 0;
		margin-top:20px;
		margin-bottom:20px;
		box-shadow:none;
	}
	#radio-btn .btn::after{
		content:'';
		height:20px;
		width:20px;
		margin-top:20px;
		margin-bottom:20px;
		background-color: rgba(0,0,0,0.2);
		position: relative;
		display: inline-block;
		border:3px solid blue;
		visibility: visible;
		border-radius:50%;
	}
	#input-grp{
		width: 40%;
		height:70%;
		display:inline-block;
	}
	#input-grp1{
		width: 40%;
		height:70%;
		display:inline-block;
	}
	#form-control{
		font-size:12px;
		border-radius:0;
		color:#fff;
		background:transparent;
		box-shadow:none;
	}
	.payment{
		width:100px;
        height:30px;
		padding:5px 10px;
		margin:4px 0px;
		border:none;
		border-radius:2px;
		cursor:pointer;
       
	}
	.submit{
		width:100px;
        height:40px;
		background-color:#4CAF50;
		color:white;
		padding:10px 10px;
		margin:8px 0px;
		border:none;
		border-radius:4px;
		cursor:pointer;
       
	}
</style>
</head>
<body>
<?php 
include ("nav.php")
?>

<div id="mainarea">
<h1 align="center"><font color="Cornsilk" face="Times New Roman">Enter the Flight Details</font></h1>
<form name="transaction" action="book.php" method="post" onsubmit="return validate()">
<table align="center">

<tr>
<center><td><label><font color="cornsilk" size="5">ID:</font></label></td>
<td><input type="text" id="id" align="center" name="id">
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Name:</font></label></td>
<td><input type="text" id="name" align="center" name="name">
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Mobile Number:</font></label></td>
<td><input type="text" id="mob" align="center" name="mob">
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Email:</font></label></td>
<td><input type="text" id="email" align="center" name="email">
</tr>
<tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Password:</font></label></td>
<td><input type="password" id="pw" align="center" name="pw">
</tr>
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Flight Number:</font></label></td>
<td><input type="text" id="fno" align="center" name="fno">
</tr>
<tr>
<td><font color="Cornsilk" size="5"> Select source:</font></td>&nbsp;&nbsp;
<td><select id="source" align="center" name="source">
<option value="None" disabled selected>------Select source------</option>
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
</tr><br><br><br>
<tr>
<td><p><font color="Cornsilk" size="5">Select destination:</font></p></td>
<td><select id="destination" align="center" name="destination">
<option value="None" disabled selected>---Select destination---</option>
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
</select></td>
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Departing:</font></label></td>
<td><input type="date" id="departing" align="center" name="departing">
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Returning:</font></label></td>
<td><input type="date" id="returning" align="center" name="returning">
</tr>
<tr>
<center><td><label><font color="cornsilk" size="5">Number Of Ticket:</font></label></td>
<td><input type="number" id="ticket" align="center" name="ticket">
</tr>
</table><br>
<center><button type="submit" class="submit" value="submit" name="submit">BOOK</button></center>
</form>

</div>
</body>
</html>