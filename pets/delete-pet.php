<?php

include("../cfg/database.php");

$db=$conn;

global $db;

$id = $_POST['id'];

if (!$id)
{
	echo 'Please enter an ID to delete the pet';
}
else
{
	$sql = "SELECT * FROM pets where pet_id = $id";
	$result = mysqli_query($db, $sql);

	  if(mysqli_num_rows($result)>0){
	   
	   $deletequery= "DELETE FROM pets where pet_id = $id";
	   $deletedpeople = mysqli_query($db, $deletequery);

	    echo "Pet with id: $id has been deleted";
	  }
	  else
	 {   
	   echo "Pet with id: $id not found in the system";
	}  
}

?> 