<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the rooms</title>
</head>
<body>
	<?php

	
		session_start();
		$t = $_GET['mail'];
		$tmail = $_SESSION['temp_uname'];
		$conn = new mysqli('localhost','root','','clg_project');

        $query = "SELECT * FROM `listing_common_table` WHERE L_email = '$tmail'";
        $run1 = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run1);

        $query1 = "SELECT * FROM `listing_1_table` WHERE L_email = '$tmail'";
        $run2 = mysqli_query($conn,$query1);
        $data1 = mysqli_fetch_assoc($run2);

        $query2 = "SELECT * FROM `listing_2_table` WHERE L_email = '$tmail'";
        $run3 = mysqli_query($conn,$query2);
        $data2 = mysqli_fetch_assoc($run3);
		
	
			

				$query4 = "UPDATE `listing_common_table` SET `Approve` = '1' WHERE `listing_common_table`.`L_email` = '$t'";
	            $run5 = mysqli_query($conn,$query4);

    	        $query5 = "UPDATE `listing_2_table` SET `Approve` = '1' WHERE `listing_2_table`.`L_email` = '$t'";
            	$run6 = mysqli_query($conn,$query5);

            	echo "<h1>$tmail booking Cancel Successfully !</h1>";
?>
</body>
</html>