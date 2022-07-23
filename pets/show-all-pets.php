<?php

include("../cfg/database.php");
$db=$conn;

// fetch query
function get_all_pets(){
 global $db;
  $query="SELECT * from pets ORDER BY pet_id DESC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= get_all_pets();
show_all_pets($fetchData);

function show_all_pets($fetchData){
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
        <td colspan='4'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>