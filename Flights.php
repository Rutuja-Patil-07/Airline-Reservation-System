<!DOCTYPE html>
<html>
    <head>
    
    <title>Flights Search</title>  
        <style type="text/css">
        body{
            font-family: "lato";
            color:rgb(100,98,98);

        }
       .background{
        background-color:#d882ed;
        background-repeat: no-repeat;
        background-image: linear-gradient(to bottom,#2c3137,#d882ed);
        background-size: 100% 400px;
        display: flex;
        justify-content: center;
       } 
       .container{
         width: 1000px;
       }
       
       .data{
        display: flex;
        justify-content: center;
        position:relative;
       }
       
       
       .flight-search{
        border:1px solid rgb(202,202,202);  
        display:flex;
        margin-top:50px;
        border-radius:10px;
       }
       .flight{
        margin:10px;
        color:rgb(33,32,32);
        width:200px;
        border-right:1px solid rgb(140,139,139);
       }
       .flight h1{
        margin:3px;
       }
    .book{
		width:100px;
        height:50px;
        
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
    <body class="background">
    
        <div class="container">
            <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>A6</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Kolhapur Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Kerala</h1>
                            <span>Kannur International Airport in Kerala</span>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>9:40AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.8185/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>A7</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Kolhapur Airport</h1>
                      
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Kerala Airport</h1>
                      <span>Kannur International Airport in Kerala</span>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>12:15pM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8185/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>A8</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Kolhapur Airport</h1>

                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Kerala Airport</h1>
                      <span>Kannur International Airport in Kerala</span>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>3:00PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8185/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  
  <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>B21</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Pune Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Ratnagiri Airport</h1>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>8:40AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.6251/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>B24</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>pune Airport</h1>
                      
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Ratnagiri Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>12:15pM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.6251/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>B26</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Pune Airport</h1>

                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Ratnagiri Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>2:15PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.6251/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>C1</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Mumbai Airport</h1>
                            <span>Chh.shivaji maharaj international Airport in Mumbai</span>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Nashik Airport</h1>
                            <span>Ozar Airport in Nashik</span>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>6:50AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.7650/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>C4</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Mumbai Airport</h1>
                      <span>Chh.shivaji maharaj international Airport in Mumbai</span>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Nashik Airport</h1>
                      <span>Ozar Airport in Nashik</span>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>11:15AM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.7650/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>C6</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Mumbai Airport</h1>
                      <span>Chh.shivaji maharaj international Airport in Mumbai</span>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Nashik Airport</h1>
                      <span>Ozar Airport in Nashik</span>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>7:00PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.7650/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>D11</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Nanded Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Solapur Airport</h1>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>8:00AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.8100/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>D12</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Nanded Airport</h1>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Solapur Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>11:15AM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8100/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>D17</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Nanded Airport</h1>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Solapur Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>2:30PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8100/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                      <span>Flight Number</span>
                      <h2>E01</h2>
                  </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Latur Airport</h1>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Aurangabad Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>7:20AM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.7534/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  
  <div class="data">
         
         <div class="flight-search">
         <div class="flight">
                      <span>Flight Number</span>
                      <h2>E05</h2>
                  </div>
            <div class="flight">
                <span>FROM</span>
                <h1>Latur Airport</h1>
                
            </div>
            <div class="flight">
                <span>TO</span>
                <h1>Aurangabad Airport</h1>
            </div>
            <div class="flight">
                <h1><span>Time</span></h1>
                <h2>1:15pM</h2>
            </div>
            <div class="flight">
                <h1><span>Price</span></h1>
                <h2>RS.7534/-</h2>
            </div>
            <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
</div>

</div>
<div class="data">
         
         <div class="flight-search">
         <div class="flight">
                      <span>Flight Number</span>
                      <h2>E06</h2>
                  </div>
            <div class="flight">
                <span>FROM</span>
                <h1>Latur Airport</h1>

            </div>
            <div class="flight">
                <span>TO</span>
                <h1>Aurangabad Airport</h1>
            </div>
            <div class="flight">
                <h1><span>Time</span></h1>
                <h2>5:00PM</h2>
            </div>
            <div class="flight">
                <h1><span>Price</span></h1>
                <h2>RS.7534/-</h2>
            </div>
            <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
</div>

</div>
<div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>F111</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Nagpur Airport</h1>
                            <span>Dr.Ambedkar international Airport in Nagpur</span>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Solapur Airport</h1>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>7:45AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.11286/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>F121</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Nagpur Airport</h1>
                      <span>Dr.Ambedkar international Airport in Nagpur</span>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Solapur Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>11:15AM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.11286/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>F141</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Nagpur Airport</h1>
                      <span>Dr.Ambedkar international Airport in Nagpur</span>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Solapur Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>3:30PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.11286/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="container">
            <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>G44</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Pune Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Kerala</h1>
                            <span>Kannur International Airport in Kerala</span>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>3:20AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.8862/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>G66</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Pune Airport</h1>
                      
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Kerala Airport</h1>
                      <span>Kannur International Airport in Kerala</span>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>6:45pM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8862/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>G77</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Pune Airport</h1>

                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Kerala Airport</h1>
                      <span>Kannur International Airport in Kerala</span>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>11:00PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8862/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
  <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>H225</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Solapur Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Ratnagiri Airport</h1>
                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>12:00PM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.7417/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>H234</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Solapur Airport</h1>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Ratnagiri Airport</h1>
                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>4:15AM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.7417/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>I64</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Aurangabad Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Mumbai Airport</h1>
                      <SPAN>Chh.shivaji maharaj international Airport in Mumbai</SPAN>

                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>05:00AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.6452/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>I65</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Aurangabad Airport</h1>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Mumbai Airport</h1>
                      <SPAN>Chh.shivaji maharaj international Airport in Mumbai</SPAN>

                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>11:30PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.6452/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>J181</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Ratnagiri Airport</h1>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Kolhapur Airport</h1>

                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>06:30AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.8463/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>J183</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Ratnagiri Airport</h1>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Kolhapur Airport</h1>

                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>11:40AM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.8463/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
  <div class="data">
               
                     <div class="flight-search">
                     <div class="flight">
                            <span>Flight Number</span>
                            <h2>K351</h2>
                        </div>
                        <div class="flight">
                            <span>FROM</span>
                            <h1>Nashik Airport</h1>
                            <span>Ozar Airport in Nashik</span>
                        </div>
                        <div class="flight">
                            <span>TO</span>
                            <h1>Nanded Airport</h1>

                        </div>
                        <div class="flight">
                            <h1><span>Time</span></h1>
                            <h2>08:20AM</h2>
                        </div>
                        <div class="flight">
                            <h1><span>Price</span></h1>
                            <h2>RS.3690/-</h2>
                        </div>
                        <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
            </div>
            
        </div>
        
        <div class="data">
               
               <div class="flight-search">
               <div class="flight">
                            <span>Flight Number</span>
                            <h2>K368</h2>
                        </div>
                  <div class="flight">
                      <span>FROM</span>
                      <h1>Nashik Airport</h1>
                      <span>Ozar Airport in Nashik</span>
                  </div>
                  <div class="flight">
                      <span>TO</span>
                      <h1>Nanded Airport</h1>

                  </div>
                  <div class="flight">
                      <h1><span>Time</span></h1>
                      <h2>1:15PM</h2>
                  </div>
                  <div class="flight">
                      <h1><span>Price</span></h1>
                      <h2>RS.3690/-</h2>
                  </div>
                  <button type="book" class="book" onclick="window.location.href='book.php';">Book Now</button>
      </div>
      
  </div>
    </body>
</html>