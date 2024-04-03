
<?php
session_start();
include('admindb.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
<title>Flights</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        
    }
* {
    box-sizing: border-box;
}

.form{
   /* padding-left:50px;*/

}
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

input[type=submit] {
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
    margin: .7rem 0;
}

</style>
    </style>
    </head>
    <body>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Flights</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> 



<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edited Flights</h3>

                        <!--<a href="#" data-toggle="modal" data-target="" class="btn btn-primary">-->
                    </div>
        <?php
        $id=$_GET['id'];
        $conn=mysqli_connect("localhost","root","","airways");
        $query="SELECT * FROM addflights WHERE id='$id' ";
        $query_run=mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run)>0)
        {
            foreach($query_run as $row)
            {
                ?>
                <?php
            }
        }
        else
        {
            echo "No record Available";
        }
        ?>



<form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="modal-body">
        <?php
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $query="SELECT * FROM addflights WHERE id='$id' ";
            $query_run=mysqli_query($conn,$query);

            if(mysqli_num_rows($query_run)>0)
            {
                foreach($query_run as $row)
                {
                    ?>
                   <input type="hidden" name="id" value="<?php echo $row['id']?>" >
                    <?php
                }
            }
            else
            {
                echo "<h4>No record found</h4>";
            }
        }
        ?>

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
    
    <input type="text" id="price" name="price" placeholder="Edit Price.." required><br>
    
  <button type="submit" name="updateuser" class="btn btn-primary" onclick="window.location.href='addflightstable.php';">Update</button>
  </form>


</div>

<div class="card-body">
                 
</div>
</div>
</div>
</div>
</div>
</section>
</div>


</body>
</html>