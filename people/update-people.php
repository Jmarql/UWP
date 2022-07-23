<?php

include("../cfg/database.php");

$db=$conn;

global $db;

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];


if (!$id)
{
	echo "Please enter an ID to update!";
}
else
{
	
	if (!$name && !$email && !$age)
	{
		echo 'Nothing changed, please enter some information to update';
	}
	else
	{
	$sql = "SELECT * from people WHERE id = $id";
	$result = mysqli_query($db, $sql);
  
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$current_name = $row['name'];
			$current_email = $row['email'];
			$current_age = $row['age'];

		if (!$name)
		{
			$name = $current_name;
		}

		if (!$email)
		{
			$email = $current_email;
		}

		if (!$age)
		{
			$age = $current_age;
		}	

			$updatequery= "UPDATE people SET name = '$name', email = '$email', age = $age WHERE id = $id";
			$updateresult = mysqli_query($db, $updatequery);

			echo "The user with id: $id has been updated. The new information is: ID: $id, Name: $name, Email: $email, Age: $age";
		}

		else
		{
			echo "The ID: $id doesn't exist in the system";
		}
	}
}


?>