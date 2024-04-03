<!DOCTYPE html>
<html>
    <head>
        <title>Schedule</title>
        <style>
           html { 
		background: url(img10.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

#schedule_form	{
	width: 50%;
    height: 400px;
	margin: auto;
	border-radius: 30px;
	border: 5px solid black;
	margin-top: 150px;
	padding-bottom: 20px;
	background-color: grey;
    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
}
label{
    font-size:30px;
    color:white;
}
        </style>
</head>
<body>
    
<div id="schedule_form" align="center" height="200" width="200">
<FORM name="schedule" method="post" action="">
   <!--form action="" method="post">-->
<table>
   <td><label><font color="white" size="5">FROM</font></label></td>
	    <tr> 
<td><select id="source" align="right" name="source" >
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
</tr>
<br><br><br>
<td><label><font color="white" size="5">TO</font></label></td>
	    <tr> &nbsp;&nbsp;&nbsp;&nbsp;
<td><select id="source" align="right" name="source" >
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
</tr>
</table><br><br>

<label for="time">Time:</label>
<input type="text" id="time" name="time"><br><br>

<label for="Price">Price:</label>
<input type="text" id="price" name="price">

<body>

</html>