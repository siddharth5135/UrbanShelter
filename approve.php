<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the rooms</title>
    <link rel="stylesheet" type="text/css" href="approve.css">
</head>
<body>
    <br>
    <form method="POST">
    <input type="text" name="txt1" placeholder="Enter Email ID">
    <input type="submit" name="sub" value="Show">
    <br><br><br>
    </form>
	<?php

        
		// Connection to Database
        $conn = new mysqli('localhost','root','','clg_project');

        $query = "SELECT * FROM `listing_common_table` WHERE Approve = 0";
        $run1 = mysqli_query($conn,$query);
        $data = mysqli_num_rows($run1);

        $query1 = "SELECT * FROM `listing_1_table`";
        $run2 = mysqli_query($conn,$query1);
        $data1 = mysqli_num_rows($run2);

        $query2 = "SELECT * FROM `listing_2_table` WHERE Approve = 0";
        $run3 = mysqli_query($conn,$query2);
        $data2 = mysqli_num_rows($run3);



        if($data!=0 && $data2!=0)
        {
         	while($row = mysqli_fetch_array($run1))
         	{

                // echo "<br><br><br><br>";

         		echo "
   					  <table border=2 width=30%  style='text-align:center; padding:10px;'>
   					  	
         				  <th>Email</th>
         				  <td>".$row['L_email']."</td>
         				</tr>
         				
         			";
         	    if(isset($_POST['sub']))
                {
                 if($row['L_email']==$_POST['txt1'])
                 {
                    header('Location: approve1.php');
                    session_start();
                    $_SESSION['temp_id'] = $_POST['txt1']; 
                 }
                }		
         	}

         	
        }
        else 
        {
        	echo '<script>alert("No New Records In the Database")</script>';
        }
        
	?>
</body>
</html>