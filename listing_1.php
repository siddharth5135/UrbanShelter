<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the rooms</title>
	<link rel="stylesheet" type="text/css" href="listing_1.css">
	<style type="text/css">
     
     input[type=text] 
     {
        width: 80%;
        padding-top: 1rem;
        padding-bottom: 10px;
        padding-left: 1rem;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #4C7972;
        color: #915A3C;
        font-size: 1rem;
     }
   
    
    </style>

</head>

<body bgcolor="#EDEDED">


	<?php
    
		session_start();
        $conn = new mysqli('localhost','root','','clg_project');
        
        if(isset($_POST['next']))
        {
            $house_no = $_POST['house_no'];
            $Soc_name = $_POST['Soc_name'];
            $near = $_POST['near'];
            $street = $_POST['street'];
            $s_area = $_POST['s_area'];
            $s_city = $_POST['s_city'];
            $total_houses = $_POST['total_houses'];
            $floor_no = $_POST['floor_no'];
            $t_floors = $_POST['t_floors'];
            $p_type = $_POST['all_pro'];
            
            $email = $_SESSION['t_email'];
            $approve = $_SESSION['app'];

            $bedrooms = $_POST['bedrooms'];
            $balconies = $_POST['balconies'];
            $f_type = $_POST['f_type'];
            $bathroom = $_POST['bathroom'];
            $TV = $_POST['TV'];
            $AC = $_POST['AC'];
            

            $amenities = $_POST['amenities'];
            $amenities1 = implode(",",$amenities);


            $sql = "INSERT INTO `listing_1_table` (`House_no`, `Soc_name`, `Near`, `Street_name`, `Area`, `City`, `Total_houses`, `Floor_no`, `Total_floors`, `L_email`, `Bedrooms`, `Balconies`, `Furnished`, `Bathrooms`, `TV`, `AC`, `Amenities`, `Property_type`) VALUES ('$house_no', 
                '$Soc_name', '$near', '$street', '$s_area', '$s_city', '$total_houses', '$floor_no', '$t_floors', '$email', '$bedrooms', '$balconies', '$f_type', '$bathroom', '$TV', '$AC', '$amenities1','$p_type')"; 

            $run = mysqli_query($conn,$sql);
                
                if($run)
                {
                    header('Location: listing_2.php');
                }
                else
                {
                    echo '<script>alert("Enter Data Properly")</script>';
                }
        }
        
	?>



	<div class="container">
	<form class="back" method="POST">
	   
       <br>
        <h2>&nbsp&nbspAddress Details</h2>
        <br>
       <div class="content_center">

       			<!-- House Number -->
				<input type="text" placeholder="House Number" name="house_no" required>
		        <br><br>

				<!-- Society Name -->
                <input type="text" placeholder="Society Name" name="soc_name" required>
		        <br><br>		        

		        <!-- Near Place -->
				<input type="text" placeholder="Near" name="near" required>
		        <br><br>          

		        <!-- Street Name -->
				<input type="text" placeholder="Street Name" name="street" required>
		        <br><br><br>	

                <!-- Property Type -->
                <div class="pro_type">
                <label>Property Type: &nbsp&nbsp</label>
                <select class="property_type" name="all_pro"  required>
                    <option name="p_type" value="Select" required>-----Select-----</option>
                    <option name="p_type" value="Flat/Apartment" required>Flat/Apartment</option>
                    <option name="p_type" value="Bunglow" required>Bunglow</option>
                    <option name="p_type" value="Villa" required>Villa</option>
                    <option name="p_type" value="Penthouse" required>Penthouse</option>
                    <option name="p_type" value="Row House" required>Row House</option>
                </select>
                </div>
                <br><br><br>

		        <!-- Area -->
                <div class="pro_type">
                <label>Area: &nbsp&nbsp</label>
                <select class="property_type" name="s_area"  required>
                    <option name="area" value="Select">---------------Select---------------</option>
                    <option name="area" value="New Ranip">New Ranip</option>
                    <option name="area" value="Sola">Sola</option>
                    <option name="area" value="Ghatlodiya">Ghatlodiya</option>
                    <option name="area" value="Chandlodiya">Chandlodiya</option>
                    <option name="area" value="Sindhu Bhawan">Sindhu Bhawan</option>
                    <option name="area" value="Gota">Gota</option>
                </select>
                </div>
                <br><br> 

                <!-- City -->
                <div class="pro_type">
                <label>City: &nbsp&nbsp</label>
                <select class="property_type" name="s_city"  required>
                    <option name="city" value="Ahmedabad">Ahmedabad</option>
                </select>
                </div>
                <br><br>

		        <!-- No. of Houses in Society -->
		        <div class="pro_type">
                <label>No. of Houses in Society: &nbsp&nbsp</label>
                <select class="property_type" name="total_houses" required>
                	<option name="house" value="Select">---------------Select---------------</option>
                    <option name="house" value="Less than 50">Less than 50</option>
                    <option name="house" value="Between 50 to 100">Between 50 to 100</option>
                    <option name="house" value="More than 100">More than 100</option>
                </select>
                </div>
                <br><br>

                <!-- Floor Number -->
                <div class="pro_type">
                <label>Floor Number : &nbsp&nbsp</label>
                <select class="property_type" name="floor_no" required>
                	<option name="floor" value="Select">---------------Select---------------</option>
                    <option name="floor" value="1st">1st</option>
                    <option name="floor" value="2nd">2nd</option>
                    <option name="floor" value="3rd">3rd</option>
                    <option name="floor" value="4th">4th</option>
                    <option name="floor" value="5th">5th</option>
                    <option name="floor" value="6th">6th</option>
                    <option name="floor" value="7th">7th</option>
                    <option name="floor" value="8th">8th</option>
                    <option name="floor" value="9th">9th</option>
                    <option name="floor" value="10th">10th</option>
                    <option name="floor" value="11th">11th</option>
                    <option name="floor" value="12th">12th</option>
                    <option name="floor" value="13th">13th</option>
                    <option name="floor" value="14th">14th</option>
                    <option name="floor" value="15th">15th</option>

                </select>
                </div>
                <br><br>

                <!-- Total Floors -->
                <div class="pro_type">
                <label>Total Floors : &nbsp&nbsp</label>
                <select class="property_type" name="t_floors" required>
                	<option name="floor" value="Select">---------------Select---------------</option>
                    <option name="floor" value="1">1</option>
                    <option name="floor" value="2">2</option>
                    <option name="floor" value="3">3</option>
                    <option name="floor" value="4">4</option>
                    <option name="floor" value="5">5</option>
                    <option name="floor" value="6">6</option>
                    <option name="floor" value="7">7</option>
                    <option name="floor" value="8">8</option>
                    <option name="floor" value="9">9</option>
                    <option name="floor" value="10">10</option>
                    <option name="floor" value="11">11</option>
                    <option name="floor" value="12">12</option>
                    <option name="floor" value="13">13</option>
                    <option name="floor" value="14">14</option>
                    <option name="floor" value="15">15</option>

                </select><br><br>

                </div>
                <br><br>         

            </div>
            


                <h2>&nbsp&nbspProperty Features</h2>
                <br><br>
                <div class="content_center">

                    <div class="pro_type">
                    <label>Bedrooms: &nbsp&nbsp</label>
                    <select class="property_type" name="bedrooms"  required>
                        <option name="bedroom" value="Select">---------------Select---------------</option>
                        <option name="bedroom" value="1">1</option>
                        <option name="bedroom" value="2">2</option>
                        <option name="bedroom" value="3">3</option>
                        <option name="bedroom" value="4">4</option>
                        <option name="bedroom" value="5">5</option>
                    </select>
                    </div><br><br>

                    <div class="pro_type">
                    <label>Balconies: &nbsp&nbsp</label>
                    <select class="property_type" name="balconies"  required>
                        <option name="balcony" value="Select">---------------Select---------------</option>
                        <option name="balcony" value="1">1</option>
                        <option name="balcony" value="2">2</option>
                        <option name="balcony" value="3">3</option>
                        <option name="balcony" value="4">4</option>
                        <option name="balcony" value="5">5</option>
                    </select>
                    </div><br><br>
                
                <div class="t_text">Furnished Status :<br><br>
                <input type="radio" name="f_type" value="No Furnished" required>No Furnished
                <input type="radio" name="f_type" value="Semi Furnished" required>Semi Furnished
                <input type="radio" name="f_type" value="Fully Furnished" required>Fully Furnished
                </div>
                <br><br>

                <div class="pro_type">
                    <label>Bathroom: &nbsp&nbsp</label>
                    <select class="property_type" name="bathroom"  required>
                        <option name="bath" value="Select">---------------Select---------------</option>
                        <option name="bath" value="1">1</option>
                        <option name="bath" value="2">2</option>
                        <option name="bath" value="3">3</option>
                        <option name="bath" value="4">4</option>
                        <option name="bath" value="5">5</option>
                    </select>
                    </div><br><br>

                <table>
                    <tr>
                        <td class="temp">TV : </td>
                        <td></td><td></td><td></td><td></td><td></td>
                        <td class="temp">AC : </td>
                    </tr>
                    <tr>
                        <td><div class="pro_type">
                    <select class="property_type" name="TV"  required>
                        <option name="t" value="Select">---------------Select---------------</option>
                        <option name="t" value="1">1</option>
                        <option name="t" value="2">2</option>
                        <option name="t" value="3">3</option>
                        <option name="t" value="4">4</option>
                        <option name="t" value="5">5</option>
                    </select>
                    </div></td>
                    <td></td><td></td><td></td><td></td><td></td>
                    <td><div class="pro_type">
                    <select class="property_type" name="AC"  required>
                        <option name="a" value="Select">---------------Select---------------</option>
                        <option name="a" value="1">1</option>
                        <option name="a" value="2">2</option>
                        <option name="a" value="3">3</option>
                        <option name="a" value="4">4</option>
                        <option name="a" value="5">5</option>
                    </select>
                    </div></td>
                    </tr>
                </table>
                <br><br>
                

                <div class="m_amenities">
                <p>Aminities : </p>
                <table>
                    <tr>
                        <td><input type="checkbox" name="amenities[]" value="Fridge">Fridge</td>
                        <td><input type="checkbox" name="amenities[]" value="Sofa">Sofa</td>
                        <td><input type="checkbox" name="amenities[]" value="Dining Table">Dining Table</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="amenities[]" value="Washing Machine">Washing Machine&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="checkbox" name="amenities[]" value="Microwave">Microwave&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="checkbox" name="amenities[]" value="Gas Connection">Gas Connection</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="amenities[]" value="Electricity">Electricity</td>
                        <td><input type="checkbox" name="amenities[]" value="Solar Panel">Solar Panel</td>
                    </tr>
                </table>
                </div>

                <br><br><br>

                <!-- Button -->
                <div class="applybtn">
                <input type="submit" value="BACK" name="back">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp          
                <input type="submit" value="NEXT" name="next">
                </div>
                <br><br><br>
            </div>
            
	
    </form>
	</div>

<!-- Footer -->
    <br><br><br>

    <footer class="footer-distributed">

            <div class="footer-left">

                <h3>the<span>rooms</span></h3>

                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>
                    
                    <a href="#">Blog</a>
                
                    <a href="#">Pricing</a>
                
                    <a href="#">About</a>
                    
                    <a href="#">Faq</a>
                    
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">therooms Copyright Reserved © 2022</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <p><a href="https://www.google.co.in/maps/dir//3GMJ%2BG68+Ranchhodlal+Chhotalal+Technical+Institute,+Opp+Civil,+Near+Gujarat+High+Court,+S.G.Highway,+Sola,+Ahmedabad,+Gujarat+380060/@23.0801917,72.5265533,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x395e82db57cc8443:0x13a68fd1f0605c91!2m2!1d72.5305735!2d23.0837988"><span>R.C.Technical</span> Sola Bhagwat, Ahmedabad</a></p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+917859223970</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="https://mail.google.com/mail/u/0/?hl=en#sent?compose=GTvVlcSBmltZCHjSqTZBLVqrsbBLMHvlLfTmGFglgSbQcMpHBNjhBCptwcLxlJCGKzdLhxbsjvVjs">therooms@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>

                </div>

            </div>

        </footer>

</body>
</html>