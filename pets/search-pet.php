<?php

include("../cfg/database.php");
$db=$conn;
// fetch query
function search_pets(){
 global $db;
 
 $id = $_POST["id"];

  $query="SELECT * from pets WHERE pet_id = " . $id ." ORDER BY pet_id DESC";

  $exec=mysqli_query($db, $query);
  
  if(mysqli_num_rows($exec)>0)
  {
	$row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
	return $row;  
        
  }
  else
  {
	return $row=[];
  }
  }
  
$check = $_POST["id"];

if (!$check)
{
	echo 'Please enter a pet ID to search!';
}
else
{
$fetchData= search_pets();
show_results($fetchData);
}

function show_results($fetchData){
 echo '<table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Species</th>
            <th>Age</th>
	    <th>Owner</th>
        </tr>';

 if(count($fetchData)>0){

      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$data['pet_id']."</td>
          <td>".$data['pet_name']."</td>
          <td>".$data['pet_species']."</td>
          <td>".$data['pet_age']."</td>
	  <td>".$data['pet_owner']."</td>
    </tr>";
       

     }
}else{
     
  echo "<tr>
        <td colspan='5'>The pet requested doesn't exist in our records.</td>
       </tr>"; 
}
  echo "</table>";
}

?>