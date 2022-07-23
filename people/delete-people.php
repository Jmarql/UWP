<?php

include("../cfg/database.php");

$db=$conn;

global $db;

$id = $_POST['id'];

if (!$id)
{
	echo 'Please enter an ID to delete';
}
else
{
$sql = "SELECT * FROM people where id = $id";
$result = mysqli_query($db, $sql);

  if(mysqli_num_rows($result)>0){
   
   $deletequery= "DELETE FROM people where id = $id";
   $deletedpeople = mysqli_query($db, $deletequery);

    $deletequerypets = "DELETE FROM pets where pet_owner = $id";
    $deletedpets = mysqli_query($db, $deletequerypets);
    echo "Person with id: $id and all his pets have been deleted";
  }
  else
 {   
   echo "Person with id: $id not found in the system";
}  
}

?> 