<?php

include("../cfg/database.php");

$db=$conn;

global $db;

$name = $_POST['name'];
$species = $_POST['species'];
$age = $_POST['age'];
$owner = $_POST['owner'];

if (!$name or !$species or !$age or !$owner)
{
	echo "Can't add new pet, missing data";
}
else
	{
		$searchowner ="SELECT * from people where id = $owner";
		$exec=mysqli_query($db, $searchowner);
  
			if(mysqli_num_rows($exec)>0){
				$query="INSERT INTO pets (pet_name, pet_species, pet_age, pet_owner) VALUES ('$name', '$species', '$age', '$owner')";
				$exec=mysqli_query($db, $query);
				echo "New pet added successfully: Name: $name, Species: $species, Age: $age, Owner: $owner";
			}
				else
				{
					echo "Please specify a valid owner for this pet!";
				}
	}

?>