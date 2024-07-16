<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the rooms</title>
</head>
<body>

	<?php

		 $conn = new mysqli('localhost','root','','clg_project');
		 session_start();
		 $tmail = $_SESSION['temp_id'];

        $query = "SELECT * FROM `listing_common_table` WHERE L_email = '$tmail'";
        $run1 = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run1);

        $query1 = "SELECT * FROM `listing_1_table` WHERE L_email = '$tmail'";
        $run2 = mysqli_query($conn,$query1);
        $data1 = mysqli_fetch_assoc($run2);

        $query2 = "SELECT * FROM `listing_2_table` WHERE L_email = '$tmail'";
        $run3 = mysqli_query($conn,$query2);
        $data2 = mysqli_fetch_assoc($run3);

         		echo "
   					  <table border=10 width=40%  style='text-align:center; padding:10px;'>
   					  	
   					  	<tr>
                            <td colspan='2'><h3>Personal Details</h3></td>
                        </tr>
                        <tr></tr>
         				
         				<tr>
         				  <th>Type</th>         				  
         				  <td>".$data['Type']."</td>
         				</tr>
         				<tr>
         				  <th>First Name</th>
         				  <td>".$data['First_name']."</td>
         				</tr>
         				<tr> 
         				  <th>Last Name</th>
         				  <td>".$data['Last_name']."</td>
         				</tr>
         				<tr>
         				  <th>Email</th>
         				  <td>".$data['L_email']."</td>
         				</tr>
         				<tr>
         				  <th>Property Type</th> 
         				  <td>".$data1['Property_type']."</td>
         				</tr>
         			";
         				echo "
         				<tr>
         					<td colspan='2'><h3>Address & Property Features</h3></td>
         				</tr>
         				<tr>
         				   <th>House Number</th>
         				   <td>".$data1['House_no']."</td>
         				</tr>
         				<tr>
         				   <th>Society Name</th>
         				   <td>".$data1['Soc_name']."</td>
         				</tr>
         				<tr>
         				   <th>Near</th>
         				   <td>".$data1['Near']."</td>
         				</tr>
                        <tr>
                           <th>Street Name</th>
                           <td>".$data1['Street_name']."</td>
                        </tr>
                        <tr>
                           <th>Area</th>
                           <td>".$data1['Area']."</td>
                        </tr>
                        <tr>
                           <th>City</th>
                           <td>".$data1['City']."</td>
                        </tr>
                        <tr>
                           <th>Total House</th>
                           <td>".$data1['Total_houses']."</td>
                        </tr>
                        <tr>
                           <th>Floor</th>
                           <td>".$data1['Floor_no']."</td>
                        </tr>
                        <tr>
                           <th>Total Floors</th>
                           <td>".$data1['Total_floors']."</td>
                        </tr>
                        <tr>
                           <th>Floor</th>
                           <td>".$data1['Floor_no']."</td>
                        </tr>
                        <tr>
                           <th>Bedrooms</th>
                           <td>".$data1['Bedrooms']."</td>
                        </tr>
                        <tr>
                           <th>Balconies</th>
                           <td>".$data1['Balconies']."</td>
                        </tr>
                        <tr>
                           <th>Furnished</th>
                           <td>".$data1['Furnished']."</td>
                        </tr>
                        <tr>
                           <th>Bathroom</th>
                           <td>".$data1['Bathrooms']."</td>
                        </tr>
                        <tr>
                           <th>TV</th>
                           <td>".$data1['TV']."</td>
                        </tr>
                        <tr>
                           <th>AC</th>
                           <td>".$data1['AC']."</td>
                        </tr>
                        <tr>
                           <th>Amenities</th>
                           <td>".$data1['Amenities']."</td>
                        </tr>

         			   ";

                        echo "
                            <tr>
                                <td colspan='2'><h3>House Details</h3></td>
                            </tr>
                            <tr>
                                <th>Carpet Area</th>
                                <td>".$data2['Sqrt']."</td>
                            </tr>
                            <tr>
                                <th>Construction Age</th>
                                <td>".$data2['Construction_age']."</td>
                            </tr>
                            <tr>
                                <th>Rent Amount</th>
                                <td>".$data2['Rent']."</td>
                            </tr>
                            <tr>
                                <th>Maintainance</th>
                                <td>".$data2['Maintainance']."</td>
                            </tr>
                              
                            <tr>
                                <th>Images</th>
                                <td>$data2[Image_1]</td>
                                
                            </tr>

                            <tr>
                              <td colspan='2' height='30px'></td>
                           </tr>



                            </table>
                        ";

                        if(isset($_POST['approve']))
                        {
                           $query3 = "UPDATE `listing_common_table` SET `Approve` = '1' WHERE `listing_common_table`.`L_email` = '$tmail'";
                           $run4 = mysqli_query($conn,$query3);

                           $query4 = "UPDATE `listing_2_table` SET `Approve` = '1' WHERE `listing_2_table`.`L_email` = '$tmail'";
                           $run5 = mysqli_query($conn,$query4);

                           echo '<script>alert("Approve")</script>';
                        }
                        if(isset($_POST['discard']))
                        {
                           echo '<script>alert("Discard")</script>';
                        } 
                        
                   

                // echo "<br><br><br><br><br><br><br><br>";
         	

	?>
	<br>
	<form method="POST">
		<input type="submit" name="approve" value="Approve">&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="discard" value="Discard">

	</form>
	<br><br><br><br><br><br><br><br>
</body>
</html>
