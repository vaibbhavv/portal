<?php

$conn =  mysqli_connect("localhost" , "root" , "" ,"patientinfo" );


$first=$_POST['finame'];
$last= $_POST['lname'];
$father= $_POST['fname'];
$email= $_POST['email'];
$mobile= $_POST['number'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip=$_POST['zip'];
$appoint= $_POST['appoint'];
$symptoms= $_POST['symptoms'];
$sql = "insert into details (first ,last,father_name,email,mobile,address,city,state,zip,appointment,symptoms) values('$first','$last' ,'$father','$email','$mobile','$address','$city','$state','$zip' ,'$appoint','$symptoms')";
mysqli_query($conn,$sql);


?>