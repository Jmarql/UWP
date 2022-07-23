<?php

include("../cfg/database.php");
$db=$conn;
// fetch query
function search_people(){
 global $db;
 $idtosearch = $_POST["id"];
  $query="SELECT * from people WHERE id = " . $idtosearch ." ORDER BY id DESC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}

$check = $_POST['id'];

if (!$check)
{
	echo 'Please enter an ID to search for the person';
}
else
{
$fetchData= search_people();
show_results($fetchData);
}


function show_results($fetchData){
 echo '<table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>

        </tr>';

 if(count($fetchData)>0){

      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$data['id']."</td>
          <td>".$data['name']."</td>
          <td>".$data['email']."</td>
          <td>".$data['age']."</td>
    </tr>";
       

     }
}else{
     
  echo "<tr>
        <td colspan='4'>The person requested doesn't exist in our records.</td>
       </tr>"; 
}
  echo "</table>";
}

?>