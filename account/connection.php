<?php
	$user = 'root';
	$pass = '';
	$db = 'rm_event';
	$conn = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
	if ($conn) {
		// echo "Connected";
	}
	else {
		echo "failed";
	}
	// // $query = "insert into admin (admin_id, password) values('1','123')";
	// // if (mysqli_query($conn,$query)) {
	// // 	echo "Data Ghush Gaya";
	// // }
	// // else {
	// // 	echo "Data Bhithar chala gaya";
	// // }

	// $query2 = "insert into booking values(NULL,'Bipin','Ghumo Phiro','9988776655','12/01/2018','1','0','1')";
	// if (mysqli_query($conn,$query2)) {
	// 	echo "Booking Sucess";
	// }
	// else {
	// 	echo "Booking Failed";
	// }
?>

