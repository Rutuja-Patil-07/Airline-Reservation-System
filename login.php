<?php
session_start();

    if(isset($_POST['submit']))
    {
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    //$psw3=$_POST['psw3'];
    $conn=new mysqli('localhost','root','','airways');
    if($conn->connect_error)
    {
        die('connection failed:'.$conn->connect_error);
    }
    else
    {   $sql="SELECT email,password from register where email='$email' and password='$pw'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {  
              echo "<script>alert('You are logged in.....');</script>";
              header("Location:Flights.php");
        }
        else
        {
            echo "<script>alert('Incorrect username or password');</script>";
        }
    
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>


<style type="text/css">
	#loginarea{
		background-color: white;
		width: 30%;
		margin: auto;
		border-radius: 25px;
		border: 2px solid blue;
		margin-top: 100px;
		background-color: rgba(0,0,0,0.2);
	    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
	    padding: 40px;
	    font-family:sans-serif;
		font-size: 20px;
		color: white;
	}
	html { 
		background: url(airline1.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.book{
		border-radius: 5px;
		background-color: rgba(0,0,0,0);
		padding: 7px 7px 7px 7px;
		box-shadow: inset -1px -1px rgba(0,0,0,0.5);
		font-family:"Comic Sans MS", cursive, sans-serif;
		font-size: 17px;
		margin:auto;
		margin-top: 20px;
  		display:block;
  		color: white;
		cursor: pointer;
	}
	#logintext	{
		text-align: center;
	}
	.data	{
		color: white;
	}
</style>

</head>
<body>
	<?php include("nav.php") ?>
	<div id="loginarea">
	<form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">
	<div id="logintext">Login to Airline World!</div><br/><br/>
	<table>
		<tr><td><div class="data">Enter E-Mail ID:</div></td><td><input type="text" id="email" size="30" maxlength="30" name="email"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr><td><div class="data">Enter Password:</div></td><td><input type="password" id="pw" size="30" maxlength="30" name="pw"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	</table>
	<center><button type="submit" class="book" value="submit" name="submit">Login</button></center>
	
	

	
</form></div>
</body>
</html>