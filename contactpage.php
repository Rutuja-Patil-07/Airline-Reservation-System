

<?php 
require_once("admindb.php");
if((isset($_POST['name'])&& $_POST['name'] !='name') && (isset($_POST['email'])&& $_POST['email'] !='email'))
{
 require_once("contactpage.php");
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);
$sql = "INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."');";	
//$sql="INSERT INTO contact_us (name, email, message) VALUES ('".$name."','".$email."','".$message."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
//echo "Please fill Name and Email";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Contact Form Design</title>
    </head>
     <style type="text/css">
      a:link{color:black}
      a:visited {color:black}
      a:hover {color:black}
      #gound{color: black}
      
       *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  align-items: center;
  justify-content: center;
  background: #fae9fb;
  position: fixed;
  
}
body::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  right:0;
  top: 0;
  /*background: #ba24c2;*/
  clip-path: polygon(86% 0, 100% 0, 100% 100%, 60% 100%);
}
.container{
  z-index: 12;
  max-width: 1050px;
  width: 100%;
  background: #fff;
  border-radius: 12px;
  margin: 0 20px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}
.container h1{
  font-size:40px;
  
  color:#ba24c2;
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 25px 20px;
}
.content .image-box{
  max-width: 55%;
}
.content .image-box img{
  width: 100%;
}
.content .topic{
  font-size: 22px;
  font-weight: 500;
  color: #ba24c2;
}
.content form{
  width: 40%;
  margin-right: 30px;
}
.content .input-box{
  height: 50px;
  width: 100%;
  margin: 16px 0;
  position: relative;
}
.content .input-box input{
  position: absolute;
  height: 100%;
  width: 100%;
  border-radius: 6px;
  font-size: 16px;
  outline: none;
  padding-left: 16px;
  background: #fae9fb;
  border: 2px solid transparent;
  transition: all 0.3s ease;
}
.content .input-box input:focus,
.content .input-box input:valid{
  border-color: #ba24c2;
  background-color: #fff;
}
.content .input-box label{
  position: absolute;
  left: 18px;
  top: 50%;
  color: #636c72;
  font-size: 15px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
.content .input-box input:focus ~ label,
.content .input-box input:valid ~ label{
  top: 0;
  left: 12px;
  display: 14px;
  color: #ba24c2;
  background: #fff;
}
.content .message-box{
  min-height: 100px;
  position: relative;
}
.content .message-box textarea{
  position: absolute;
  height: 100%;
  width: 100%;
  resize: none;
  background: #fae9fb;
  border: 2px solid transparent;
  border-radius: 6px;
  outline: none;

}
.content .message-box textarea:focus{
  border-color: #ba24c2;
  background-color: #fff;
}
.content .message-box label{
  position: absolute;
  font-size: 16px;
  color: #636c72;
  left: 18px;
  top: 6px;
  pointer-events: none;
  transition: all 0.3s ease;
}
.content .message-box textarea:focus ~ label{
  left: 12px;
  top: -10px;
  color: #ba24c2;
  font-size: 14px;
  background: #fff;
}
.content .input-box input[type="submit"]{
  color: #fff;
  background: #ba24c2;
  padding-left: 0;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
.content .input-box input[type="submit"]:hover{
  background-color: #d43ddb;
}
@media (max-width:1000px) {
  .content .image-box{
    max-width: 70%;
  }
  .content{
    padding: 10px 0;
  }
}
@media (max-width:900px) {
  .content .image-box{
    display: none;
  }
  .content form{
    width: 100%;
    margin-left: 30px;
  }
}

     </style>
    <body>
    <?php 

include("nav.php") 
?>
<div class="container">
   <center> <h1>Contact Us<h1></center>
    <div class="content">
      <div class="image-box">
       <img src="img2.jpg" alt=""> 
      </div>
    <form  method="post" action="contactpage.php" onsubmit="return validate()">
      <div class="topic">Send us a message</div>
      <div class="input-box">
        <input type="text" name="name" id="name" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="text" name="email" id="email" required>
        <label>Enter your email</label>
      </div>
      <div class="message-box">
        <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
        <label>Enter your message</label>
      </div>
      <div class="input-box">
        <input type="submit" name="message" id="message" value="Send Message">
      </div>
    </form>
  </div>
  </div>
    </body>
</html>