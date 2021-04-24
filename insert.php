<?php

include 'dbc.php';

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$stmt = $conn->prepare("INSERT INTO student_details (name, age, gender)
VALUES (:name, :age, :gender)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':age', $age);
$stmt->bindParam(':gender', $gender);

$res=$stmt->execute();

if($res){
    echo 1;
}else{echo 0;}