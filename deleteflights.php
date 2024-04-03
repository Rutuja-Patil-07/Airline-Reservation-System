<?php

$conn=mysqli_connect ("localhost","root","","airways");

$id = $_GET['id'];
$sql = " DELETE FROM addflights WHERE id = '$id' " ;
$query = mysqli_query($conn,$sql);


echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!!!');
    window.location.href='addflightstable.php';
    </script>");

?>