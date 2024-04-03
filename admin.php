<?php
require('admindb.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin login Panel</title>
        <link rel="stylesheet", href="", type="text/css">

		<style>
            a:link{color:black}
      a:visited {color:black}
      a:hover {color:black}
      #gound{color: black}
         *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: poppins;
}
body{
    background-color: #E8EDF2;
}
div.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);

    display: flex;
    flex-direction: row;
    align-items: center;

    background-color:  white;
    padding: 30px;
    box-shadow: 0 50px 50px -50px darkslategray;
}
div.container div.myform{
    width: 270px;
}
div.container div.myform h2{
    color: #1c1c1e;
    margin-bottom: 20px;

}
div.container div.myform input{
    border: none;
    outline: none;
    border-radius: 0;
    width: 100%;
    border-bottom: 2px solid #1c1c1e;
    margin-bottom: 25px;
    padding: 7px 0px;
    font-size: 14px;
}
div.container div.myform button{
color: white;
background-color: #1c1c1e;
border: none;
outline: none;
border-radius: 2px;
font-size: 14px;
padding: 5px 12px;
font-weight: 500;
}
div.container div.image img{
    width: 300px;
}
.button{
    height: 20px;
    width: 20px;
    
}
		</style>
    </head>
<body>
<?php 

include("nav.php") 
?>
<div class="container">
    <div class="myform">
        <form method="post">
            <h2>ADMIN LOGIN</h2>
            <input type="text" placeholder="Admin Name" name="AdminName">
            <input type="password" placeholder="Password" name="AdminPassword">
            <input type="submit"  value="submit"  name="Signin">
        </form>
</div>
<div class="image">
    <img src="img8.jpg">
</div>
</div>


<?php
if(isset($_POST['Signin']))
{
    $uname=$_POST["AdminName"];
    $pass=$_POST["AdminPassword"];
    trim($uname);
    trim($pass);
    $query="SELECT * FROM `admin` WHERE `name`='$uname' AND `password`='$pass'";

    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "okk".var_dump($result);
    }
    else
    {
        echo "error--->".mysqli.error($con);
    }
    $num=mysqli_num_rows($result);
    //echo "nnn".$num." ".$uname.$pass;
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: dashboard.php");
    }
    else
    {
        echo "<script>alert('incorrect password');</script>";

    }
}
?>



</body>
</html>


