<?php

include 'dbc.php';

 $stm=$conn->prepare("select * from student_details order by roll desc");

 $stm->execute();

 $output="<table style='margin-top:10px;' border='1' width='100%' cellspacing='0' cellpadding='10px'><thead style='background-color:blue;color:white;'><tr><th>Name</th><th>Age</th><th>Gender</th><th>Actions</th></tr>";

 while($row=$stm->fetch(PDO::FETCH_ASSOC)){

     
     $roll=$row['roll'];
     $name=$row['name'];
     $age=$row['age'];
     $gender=$row['gender'];

     $output.="<tbody><tr><td>$name</td><td>$age</td><td>$gender</td><td><button style='background-color:red;color:white;margin-right:10px;border: none;' data-id='$roll' class='delbtn'>Delete</button><button style='background-color:blue;color:white;margin-right:10px;border: none;' data-id='$roll' data-name='$name' data-age='$age' data-gender='$gender' class='editbtn'>Edit</button></td></tbody>";
 }
 $output.="</table>";

 echo $output;
 




?>