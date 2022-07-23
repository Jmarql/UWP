<?php

include("../cfg/database.php");
$db=$conn;
// fetch query
function get_all_people(){
 global $db;
  $query="SELECT * from people ORDER BY id DESC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= get_all_people();
show_all_people($fetchData);

function show_all_people($fetchData){
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
        <td colspan='4'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>