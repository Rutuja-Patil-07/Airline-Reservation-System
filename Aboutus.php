<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
           
           a:link{color:black}
      a:visited {color:black}
      a:hover {color:black}
      #gound{color: black}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.section{
    width: 100%;
    min-height: 100vh;
    background-color: #ddd;
}
.container{
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;
}
.content-section{
    float: left;
    width: 55%;
}

.content-section .title{
    text-transform: uppercase;
    font-size: 28px;
}
.content-section .content h3{
    margin-top: 20px;
    color: #5d5d5d;
    font-size: 21px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}
.content-section .social{
    color: #a5a5a5;
    margin:auto;
}
.image img{
    float:right;
    height:250px;
    width:450px;
    padding-right: 100px;
}
 

body{
  min-height: 100vh;
  width: 100%;
  background: #EEECEB;
}
footer{
  position: fixed;
  background: #140B5C;
  width: 100%;
  bottom: 0;
  left: 0;
}
footer::before{
  content: '';
  position: absolute;
  left: 0;
  top: 100px;
  height: 1px;
  width: 100%;
  background: #AFAFB6;
}
footer .content{
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}
footer .content .top{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}
.content .top .logo-details{
  color: #fff;
  font-size: 30px;
}
.content .top .media-icons{
  display: flex;
}
.content .top .media-icons a{
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1){
  background: #4267B2;
}
.top .media-icons a:nth-child(1):hover{
  color: #4267B2;
  background: #fff;
}
.top .media-icons a:nth-child(2){
  background: #1DA1F2;
}
.top .media-icons a:nth-child(2):hover{
  color: #1DA1F2;
  background: #fff;
}
.top .media-icons a:nth-child(3){
  background: #E1306C;
}
.top .media-icons a:nth-child(3):hover{
  color: #E1306C;
  background: #fff;
}
.top .media-icons a:nth-child(4){
  background: #0077B5;
}
.top .media-icons a:nth-child(4):hover{
  color: #0077B5;
  background: #fff;
}
.top .media-icons a:nth-child(5){
  background: #FF0000;
}
.top .media-icons a:nth-child(5):hover{
  color: #FF0000;
  background: #fff;
}
          </style>
</head>
<body>
<?php 
include("nav.php") 
?>
    <div class="section">
        <div class="container">
            <div class="content-section">
           
                <div class="title">
                    <h1>About Us</h1>
                </div>
                
            <div class="content">
            
            
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airways is India’s largest passenger airline with a market share of 57.7% as of August, 2022. We primarily operate in 
            India’s domestic air travel market as a low-cost carrier with focus on our three pillars – offering low fares, being on-time 
            and delivering a courteous and hassle-free experience.<br><br>
            Airways is not only the most efficient low fare operator domestically but is also comparable with global low cost airlines. We are constantly 
            enhancing our engagement with our passengers to augment their travel experience.<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An Airways is a company that provides air transport services for traveling passengers and freight. Airlines use aircraft to supply these 
            services and may form partnerships or alliances with other airlines for codeshare agreements, in which they both offer and operate the same flight.
            </p>
            </div> 
            
        </div> 
        <div class="image">
        <img src="img1.jpg">
</div>
</div>
</div><br><br><br><br><br><br><br><br><br><br><br>

<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fa fa-slack"></i>
          <span class="logo_name">Airways</span>
        </div>
        <div class="media-icons">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>


