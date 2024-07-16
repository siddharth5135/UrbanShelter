<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the rooms</title>
	<link rel="stylesheet" type="text/css" href="listing_2.css">
	<style type="text/css">
     
     input[type=text] 
     {
        width: 70%;
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
<body>

    <?php
        
        $conn = new mysqli('localhost','root','','clg_project');
        
        if(isset($_POST['next']))
        {
            
            
            $target_dir = "uploads/";

            $target_file1 = $target_dir . basename($_FILES["img1"]["name"]);
            $target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
            $target_file3 = $target_dir . basename($_FILES["img3"]["name"]);
            $target_file4 = $target_dir . basename($_FILES["img4"]["name"]);
            $target_file5 = $target_dir . basename($_FILES["img5"]["name"]);
            $target_file6 = $target_dir . basename($_FILES["img6"]["name"]);
            $target_file7 = $target_dir . basename($_FILES["img7"]["name"]);
            $target_file8 = $target_dir . basename($_FILES["img8"]["name"]);
            $target_file9 = $target_dir . basename($_FILES["img9"]["name"]);
            $target_file10 = $target_dir . basename($_FILES["img10"]["name"]);

            session_start();
            
            $_SESSION['img1'] = $target_file1;
            $_SESSION['img2'] = $target_file2;
            $_SESSION['img3'] = $target_file3;
            $_SESSION['img4'] = $target_file4;
            $_SESSION['img5'] = $target_file5;
            $_SESSION['img6'] = $target_file6;
            $_SESSION['img7'] = $target_file7;
            $_SESSION['img8'] = $target_file8;
            $_SESSION['img9'] = $target_file9;
            $_SESSION['img10'] = $target_file10; 

            $c_sqft = $_POST['c_sqft'];
            $age = $_POST['age'];
            $r_amo = $_POST['r_amo'];
            $m_amo = $_POST['m_amo'];
            $email = $_SESSION['t_email'];
            $approve = $_SESSION['app'];
            $p_desc = $_POST['p_desc'];
            $map = $_POST['map'];
            $map_url = $_POST['map_url'];

            $sql = "INSERT INTO `listing_2_table` (`L_email`, `Sqrt`, `Construction_age`, `Rent`, `Maintainance`, `Image_1`, `Image_2`, `Image_3`, `Image_4`, `Image_5`, `Image_6`, `Image_7`, `Image_8`, `Image_9`, `Image_10`,`Approve`,`P_desc`,`map`,`map_url`) VALUES ('$email', '$c_sqft', '$age', '$r_amo', '$m_amo', '$target_file1', '$target_file2', '$target_file3', '$target_file4', '$target_file5', '$target_file6', '$target_file7', '$target_file8', '$target_file9', '$target_file10','$approve','$p_desc','$map','$map_url')"; 

            $run = mysqli_query($conn,$sql);
                
                if($run)
                {
                    move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1);
                    move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2);
                    move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3);
                    move_uploaded_file($_FILES["img4"]["tmp_name"], $target_file4);
                    move_uploaded_file($_FILES["img5"]["tmp_name"], $target_file5);
                    move_uploaded_file($_FILES["img6"]["tmp_name"], $target_file6);
                    move_uploaded_file($_FILES["img7"]["tmp_name"], $target_file7);
                    move_uploaded_file($_FILES["img8"]["tmp_name"], $target_file8);
                    move_uploaded_file($_FILES["img9"]["tmp_name"], $target_file9);
                    move_uploaded_file($_FILES["img10"]["tmp_name"], $target_file10);

                    echo '<script>alert("Respond Sended")</script>';
                    // header('Location: the_rooms.php');
                }
                else
                {
                    echo '<script>alert("Enter Data Properly")</script>';
                }
        }

        
    ?>
    


	<div class="container">
	<form class="back" method="POST" enctype="multipart/form-data">
	   
       <br>
        <h2>&nbsp&nbspArea</h2>
        
       <div class="content_center">

                <!-- Area -->
                <p>Enter Carpet Area Or Super Area</p>
                <input type="text" placeholder="Carpet Area sqft" name="c_sqft">
		        <br><br>      

                <!-- Age -->
                <div class="pro_type">
                <label>Age of Construction: <br><br></label>
                <select class="property_type" name="age">
                    <option name="age_c" value="Select">-----------Select---------</option>
                    <option name="age_c" value="1 to 5 Years">1 to 5 Years</option>
                    <option name="age_c" value="5 to 10 Years">5 to 10 Years</option>
                    <option name="age_c" value="10 to 15 Years">10 to 15 Years</option>
                    <option name="age_c" value="15+ Years">15+ Years</option>
                </select>
                </div>
                

            </div>

            <br>
        	<h2>&nbsp&nbspRent Details As Per Month</h2>

            <div class="content_center">

            	<!-- Rent Amount -->
            	<input type="text" placeholder="Rent Amount" name="r_amo">
                <br> 

                <!-- Maintainance -->
                <input type="text" placeholder="Maintainance Charges" name="m_amo">
                <br>

                <!-- Map -->
                <input type="text" placeholder="Share or Embed map" name="map">
                <br>

                <!-- Map -->
                <input type="text" placeholder="Map url" name="map_url">
                <br><br>

                <!-- Images -->
                <table class="tbl">
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img1"></td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img2"></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img3"></td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img4"></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img5"></td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img6"></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img7"></td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img8"></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img9"></td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img10"></td>
                    </tr>
                </table>
                <br><br>
                
                Property Description : <br>
                <textarea rows="6" cols="50" name="p_desc">  
                
                </textarea>  
                <br><br> 

                <!-- Button -->
                <div class="applybtn">
                <input type="submit" value="BACK" name="back">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp          
                <input type="submit" value="FINISH" name="next">
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