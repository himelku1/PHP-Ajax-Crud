<?php

include 'dbc.php';

$sroll=$_POST['id'];

$stm=$conn->prepare("delete from student_details where roll =$sroll");

$res=$stm->execute();
if ($res){
    echo 1;
}else{
    echo 0;}



?>