
<!DOCTYPE html>
<html>
<head>
<title>Airline World</title>
<style type="text/css">
a:link{color:white}
a:visited {color:white}
a:hover {color:white}
#gound{color: white}
html { 
  background: url(airline2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main_area	{
	margin: auto auto;
	color: white;
	width:800px;
	height: 400px;
	margin: 0 auto;
	color:white;
	border-radius: 25px;
	margin-top:50px;
	padding-top: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 30px;
	background-color: rgba(0,0,0,0.3);
    box-shadow: inset -4px -4px rgba(0,0,0,0.5);
}
#welcometext	{
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 50px;
}
#registertext	{
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 25px;
}
#fillertext	{
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 35px;
}
#input-grp{
		width: 40%;
		height:70%;
		
		display:inline-block;
	}

	#main_area1	{
	margin: auto auto;
	color: white;
	width:800px;
	height: 200px;
	margin: 0 auto;
	color:white;
	border-radius: 25px;
	margin-top:50px;
	padding-top: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 30px;
	background-color: rgba(0,0,0,0.3);
    box-shadow: inset -4px -4px rgba(0,0,0,0.5);
}
	

	#form-control{
		font-size:12px;
		border-radius:0;
		color:#fff;
		background:transparent;
		box-shadow:none;
		
	}
    .search{
		width:100px;
		background-color:#4CAF50;
		color:white;
		padding:14px 20px;
		margin:8px 0px;
		border:none;
		border-radius:4px;
		cursor:pointer;
       
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
	</style>
</head>
<body>
<?php 
include("nav.php") 
?>
<div align="center" id="main_area">
<div id="logo"><img src="Logo.jpg" alt="logo" height="100" width="100" align="left"/></div>
<div id="welcometext">Welcome To Airline World</div>
<br/><br/><br/><br/>
<div id="fillertext">Making your journey the best!</div>
<br/><br/><br/><br/>
 <button type="book" class="book" onclick="window.location.href='login.php';">Login</button>
 <button type="book" class="book" onclick="window.location.href='register.php';">New Registration</button>

    </div>
</div>
</body>
</html>








