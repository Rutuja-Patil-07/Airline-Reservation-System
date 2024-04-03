<?php
session_start();
include('admindb.php');

if(isset($_POST['adduser']))
{
    $source=$_POST['source'];
    $destination=$_POST['destination'];
    $time=$_POST['time'];
    $price=$_POST['price'];

    $user_query="INSERT INTO addflights (source,destination,time,price) VALUES ('$source','$destination','$time','$price')";
    $user_query_run=mysqli_query($conn,$user_query);

    if($user_query_run)
    {
        $_SESSION['status']="User Added Successfully";
        header("location: addflightstable.php");
    }
    else
    {
        $_SESSION['status']="User Added Successfully";
        header("location: addflightstable.php");
    }

}


/*
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $source=$_POST['source'];
    $destination=$_POST['destination'];
    $time=$_POST['time'];
    $price=$_POST['price'];

    $query="UPDATE addflights SET source='$source', destination='$destination', time='$time', price='$price' WHERE id='$id' ";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="User Updated Successfully";
        header("location: addflightstable.php");
    }
    else
    {
        $_SESSION['status']="User Updated failed";
        header("location: addflightstable.php");
    }
}
/*

	if (isset($_GET['edit'])) 
    {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM addflights WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$source = $n['source'];
			$destination = $n['destination'];
            $time = $n['time'];
            $price = $n['price'];
		}
	}
?>

*/



if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `addflights` WHERE id='$id'") or die('query failed');
    if($delete_query){
       header('location:addflightstable.php');
       $message[] = 'product has been deleted';
    }else{
       header('location:addflightstable.php');
       $message[] = 'product could not be deleted';
    };
 }