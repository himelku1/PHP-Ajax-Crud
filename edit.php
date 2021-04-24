<?php
include 'dbc.php';

$sroll=$_POST['id'];
$sname=$_POST['name'];
$sage=$_POST['age'];
$sgender=$_POST['gender'];

$stm=$conn->prepare("update student_details set name='$sname',age='$sage',gender='$sgender' where roll=$sroll");

$res=$stm->execute();
if ($res){
    echo 1;
}else{
    echo 0;}






?>