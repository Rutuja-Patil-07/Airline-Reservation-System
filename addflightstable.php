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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Flights</title>
  </head>
  <body>
    <section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Flights</h3>
                    <table id="example1" class="table table-bordered table_striped">
                        <thread>
                            <tr>
                                <th>id</th>
                                <th>Source</th>
                                <th>Destination</th>
                                <th>Time</th>
                                <th>Price</th>
</tr>
</thread>
<tbody>
    <?php

    $query="SELECT * FROM addflights ";
    $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>0)
    {
        foreach($query_run as $row)
        {
    //$row['source'];
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['source']; ?></td>
        <td><?php echo $row['destination']; ?></td>
        <td><?php echo $row['time']; ?></td>
        <td><?php echo $row['price']; ?></td>

        
      <td>
            <a href="flightsedit.php?id=<?php echo $row['id']; ?>" class="btn btn-info" >Edit</a>
           

            <a href="addflights.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('are your sure you want to delete this?');" >delete </a>
</td>
</tr>

    <?php

        }
    }
    else{
        ?>
       <!-- <tr>
            <td>No record found</td>
        </tr>-->
        <?php
         }
        ?>
        <tr></tr>
        <td></td>


</tbody>
</div>
</div>
</div>
</div>
</div>
        </section> 
  </body>
</html>