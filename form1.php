<?php

$conn =  mysqli_connect("localhost" , "root" , "" ,"patientinfo" );
$first= mysqli_real_escape_string($conn, $_POST['first']);
$last= mysqli_real_escape_string($conn, $_POST['last']);
$father= mysqli_real_escape_string($conn, $_POST['father']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$mobile= mysqli_real_escape_string($conn, $_POST['mobile']);
$address= mysqli_real_escape_string($conn, $_POST['address']);
$city= mysqli_real_escape_string($conn, $_POST['city']);
$state= mysqli_real_escape_string($conn, $_POST['state']);
$zip= mysqli_real_escape_string($conn, $_POST['zip']);
$appoint= mysqli_real_escape_string($conn, $_POST['optradio']);
$symptom= mysqli_real_escape_string($conn, $_POST['symp']);


$sql = "insert into details (first ,last,father_name,email,mobile,address,city,state,zip,appointment,symptoms) values('$first','$last' ,'$father','$email','$mobile','$address','$city','$state','$zip' ,'$appoint','$symptom')";
mysqli_query($conn,$sql);

header('location:page.php');



?>