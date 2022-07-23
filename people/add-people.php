<?php

include("../cfg/database.php");

$db=$conn;

global $db;

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

if (!$name or !$email or !$age)
{
echo "Can't add new person, missing data";
}
else
{
  $query="INSERT INTO people (name, email, age) VALUES ('$name', '$email', '$age')";
  $exec=mysqli_query($db, $query);
  echo "New person added successfully: Name: $name, Email: $email, Age: $age !";
}


?>