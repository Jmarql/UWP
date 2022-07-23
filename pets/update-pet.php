<?php

include("../cfg/database.php");

$db=$conn;

global $db;

$id = $_POST['id'];
$name = $_POST['name'];
$species = $_POST['species'];
$age = $_POST['age'];


if (!$id)
{
	echo "Please enter an ID to update!";
}
else
{
	
	if (!$name && !$species && !$age)
	{
		echo 'Nothing changed, please enter some information to update';
	}
	else
	{
	$sql = "SELECT * from pets WHERE pet_id = $id";
	$result = mysqli_query($db, $sql);
  
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$current_name = $row['pet_name'];
			$current_species = $row['pet_species'];
			$current_age = $row['pet_age'];

		if (!$name)
		{
			$name = $current_name;
		}

		if (!$species)
		{
			$species = $current_species;
		}

		if (!$age)
		{
			$age = $current_age;
		}	

			$updatequery= "UPDATE pets SET pet_name = '$name', pet_species = '$species', pet_age = $age WHERE pet_id = $id";
			$updateresult = mysqli_query($db, $updatequery);
			echo $updatequery;
			echo "The pet with id: $id has been updated. The new information is: ID: $id, Name: $name, Species: $species, Age: $age";
		}

		else
		{
			echo "The ID: $id doesn't exist in the system";
		}
	}
}


?>