<!DOCTYPE html>
<html>
<head>
    <title>the Rooms</title>
    <link rel="stylesheet" type="text/css" href="the_rooms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        input[type=text] 
        {
        width: 90%;
        padding-top: 1rem;
        padding-bottom: 10px;
        padding-left: 1rem;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #4C7972;
        color: #915A3C;
        font-size: 1.1rem;
        }
    </style>
</head>
<body bgcolor="#EDEDED">

    <?php
        
        // if(isset($_POST['Submit']))
        // {
        
        //  $username = "siddharththpatel@gmail.com";
        //  $hash = "4d73df37f2fb681018a6840a1758670034a38579f0c7af1b968e31ce03edc4d7";

        //  $test = "0";

        //  $sender = "TXTLCL"; // This is who the message appears to be from.
        //  $numbers = "$phno"; // A single number or a comma-seperated list of numbers
        //  $message = "Hello ".$msg;
      
        //  $message = urlencode($message);
        //  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers      ."&test=".$test;
        //  $ch = curl_init('http://api.textlocal.in/send/?');
        //  curl_setopt($ch, CURLOPT_POST, true);
        //  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //  $result = curl_exec($ch); // This is the result from the API
        //  curl_close($ch);
        //  echo '<script>alert("Message Sent Successfully.")</script>';
        // }
            
        session_start();    
        // Connection to Database
                $conn = new mysqli('localhost','root','','clg_project');
                $t = $_GET['mail'];
                $query = "SELECT * FROM listing_1_table t1 INNER JOIN listing_2_table t2 ON t1.L_email=t2.L_email WHERE t1.L_email='$t'";
                $run = mysqli_query($conn,$query);
                $num = mysqli_num_rows($run);
                                
                while($row = mysqli_fetch_assoc($run))
                {
                        $house = $row['House_no'];
                        $soc = $row['Soc_name'];
                        $nr = $row['Near'];
                        $street = $row['Street_name'];
                        $area = $row['Area'];
                        $city = $row['City'];
                        $houses = $row['Total_houses'];
                        $floor = $row['Floor_no'];
                        $t_floors = $row['Total_floors'];
                        $bedroom = $row['Bedrooms'];
                        $balconies = $row['Balconies'];
                        $furnished = $row['Furnished'];
                        $bathroom = $row['Bathrooms'];
                        $tv = $row['TV'];
                        $ac = $row['AC'];
                        $amenities = $row['Amenities'];
                        $email = $row['L_email'];
                        $p_type = $row['Property_type'];
                        $map = $row['map'];

                        $sqrt = $row['Sqrt'];
                        $age = $row['Construction_age'];
                        $rent = $row['Rent'];
                        $maintainance = $row['Maintainance'];
                        $image1 = $row['Image_1'];
                        $image2 = $row['Image_2'];
                        $image3 = $row['Image_3'];
                        $image4 = $row['Image_4'];
                        if($email == $t)
                        {
                            break;
                        }
                }
                
                        
    ?>

    <form method="POST">
    <div class="container1">
    
    <!-- --Card--- -->

    <div class="list-container">
    
        <div class="left-col">
            <!-- <p>200+ Options</p> -->
            <h1 style="margin-bottom: 2rem;">Detailed view of that property</h1>
            
            <!-- 1st Box -->

            <div class="house">

                <div class="house-img">
                    <div class="slider">
                        <div class="slide">
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">

                        <div class="st first">
                            <img src="<?php echo $image1 ?>">
                        </div>

                        <div class="st">
                            <img src="<?php echo $image2 ?>">
                        </div>

                        <div class="st">
                            <img src="<?php echo $image3 ?>">
                        </div>
        
                        <div class="st">
                            <img src="<?php echo $image4 ?>">
                        </div>
        
                            <div class="nav-m">
                            <label for="radio1" class="m-btn"></label>
                            <label for="radio2" class="m-btn"></label>
                            <label for="radio3" class="m-btn"></label>
                            <label for="radio4" class="m-btn"></label>
                        </div>
                    </div>
                </div>
                
                <script type="text/javascript" >
                    var counter=1;
                    setInterval(function()
                    {
                        document.getElementById('radio' + counter).checked=true ;
                        counter++;
                        if(counter > 4)
                        {
                            counter = 1;
                        }
                    },1000 );
                </script>
                </div>
              
                <div class="house-info">
                    <div class="price"><b><?php echo $rent ?> <i class="fa-solid fa-indian-rupee-sign"></i> / Month </b><span class="maps"><a class="view" href="https://www.google.co.in/maps/place/Siddhi+Bunglows,+New+Ranip,+Ahmedabad/@23.0910899,72.5643586,17z/data=!3m1!4b1!4m5!3m4!1s0x395e8309f479a56d:0xe74bb8c8288e8b24!8m2!3d23.0910946!4d72.5665472">View on Map <i class="fa-solid fa-map-location-dot"></i></a></span></div>
                    <p id="name"> <?php echo $bedroom ?> BHK <?php echo $p_type ?> For Rent in 
                    <?php echo $soc ?> </p><span class="location"><?php echo $area ?>, Ahmedabad <i class="fa-solid fa-location-dot"></i></span>
                    <p id="desc">Check out this <?php echo $p_type ?> available for rent in <?php echo $area ?> in Ahmedabad. It is a <?php echo $bedroom ?> BHK unit that comes at an affordable rent, with modern features and premium amenities to suit your lifestyle needs. The unit is <?php echo $furnished ?>.</p>
    
                </div>

                <div class="amenities">
                    <p>
                        <span class="box"><i class="fa-solid fa-bed"></i> <?php echo $bedroom ?> Bedroom</span>
                        <span class="box"><i class="fa-solid fa-bath"></i> <?php echo $bathroom ?> Bathroom</span> 
                        <span class="box"><i class="fa-solid fa-wifi"></i> Free Wifi</span> 
                        <span class="box"><i class="fa-solid fa-fan"></i> <?php echo $ac ?> Air Conditioner</span> 
                        <span class="box"><i class="fa-solid fa-tv"></i> <?php echo $tv ?> Television</span>
                    </p> 
                </div>

                <br><br><br><br><br>

                
                <div class="box_footer">
                    <div class="owner_contact">
                        <a href=""><b>Contact Owner<b></a>
                    </div>
                    <div class="booking">
                        <a href="Booked.php?<?php echo "mail=$t"; ?>">Booking</a>
                    </div>
                </div>

                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

            </div>
            <br><br><br>


            <div class="house">
                <h2>More Details :</h2>
                <div class="details">
                        <div class="col1">
                        <b><br><br>Address :</b>
                        </div>
                        <div class="col2">
                        <b><br><br><?php echo $house ?>, <?php echo $soc ?>, <?php echo $nr ?>, <?php echo $area ?>, Ahmedabad.</b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Furnished Status :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $furnished ?></b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Total Number of Floors :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $t_floors ?></b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Property Floor Number :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $floor ?></b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Total Numbers of House in a Society :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $houses ?></b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Square Feet Area :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $sqrt ?></b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Amenities :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $amenities ?></b>
                        </div>
                </div>

                <div class="details">
                        <div class="col1">
                        <b><br>Maintainance Cost :</b>
                        </div>
                        <div class="col2">
                        <b><br><?php echo $maintainance ?> Rs.</b>
                        </div>
                </div>


                <div class="map">
                        <div class="col1">
                        <b><br><?php echo $map; ?></b>
                        </div>
                        <div class="col2">
                        <b><br> </b>
                        </div>
                        
                </div>
                </div>

                <!-- <div class="box_footer">
                    <div class="col1">
                    <div class="owner_contact">
                        <a href=""><b>Contact Owner<b></a>
                    </div>
                    </div>
                    <div class="col2">
                    <div class="booking">
                        <a href="detail_view.php">View Details</a>
                    </div>
                    </div>
                </div> -->
            
        </div>


        <div class="right-col">
            <div class="sidebar">
                <h2>Send Enquiry</h2><br>
                <div class="filter">
                    <input type="text" placeholder="Name" name="name">
                </div>
                <br>
                <div class="filter">
                    <input type="text" placeholder="Phone Number" name="phno">
                </div>
                <br><br><br>
                <div class="applybtn">
                    <input type="submit" value="Submit" name="Submit">          
                </div>    
            </div>


        </div>
    
    </div>
    </form>


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