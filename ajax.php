<?php

$conn =  mysqli_connect("localhost" , "root" , "" ,"patientinfo" );
$query ="select * from details";

$a=mysqli_query($conn, $query);

if(mysqli_num_rows($a)>0){

	while ($result = mysqli_fetch_array($a)){
		?>

		<tr>
			
			<td><?php echo $result['first']?> </td>
			<td><?php echo $result['last'] ?> </td>
			<td><?php echo $result['father_name'] ?> </td>
			<td><?php echo $result['email'] ?></td>
			<td><?php echo $result['mobile'] ?></td>
			<td><?php echo $result['address'] ?> </td>
			<td><?php echo $result['city']?> </td>
			<td><?php echo $result['state'] ?></td>
			<td><?php echo $result['zip'] ?></td>
			<td><?php echo $result['appointment'] ?></td>
			<td><?php echo $result['symptoms'] ?></td>
		</tr>

   <?php
	}
}
?>