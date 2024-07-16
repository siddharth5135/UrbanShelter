<!DOCTYPE html>
<html>
<head>
    <title>the Rooms</title>
    <link rel="stylesheet" type="text/css" href="the_rooms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body bgcolor="#EDEDED">

    <div class="container">
        
        <div class="header">

            <table class="nav">
                <tr>
                   <th class="title">
                    <!-- <footer class="footer-distributedone">

                        <div class="footer-left">
            
                            <h3>the<span>rooms</span></h3>
                        </div>
                    </footer> -->
                      <img class="icon" src="https://cdn-icons-png.flaticon.com/512/1946/1946433.png">
                   </th>
                   <th style="padding: 1; float: left; padding-top: 1.3rem;" class="nav1"><a href="the_rooms.php">Home</a></th>
                   <th style="padding: 1; float: left; padding-top: 1.3rem; padding-left: 1.3rem;" class="nav1"><a href="about_us.html">About us</a></th>
                   <th style="padding: 15; float: left; padding-left: 1.2rem; padding-top: 1.3rem;" class="nav1"><a href="https://script.google.com/macros/s/AKfycbwXG7oxw451q7ixsv-5UyxEVNUnYx8iMBZaXO--XNMN_SgLiPa1yc8nLUEP2cRKfMNnHQ/exec">Contact us</a></th>
                   <th style="padding: 15; float: left; padding-left: 1.2rem; padding-top: 1.3rem;" class="nav1"><a href="policy_1.html">Policy</a></th>
                   <th class="nav2"><a href="listing.php"><small>+ Add Listing</small></a></th> 
                   <th></th>
                   <th class="nav2"><a href="the_rooms_signup.php"><small>Sign up/Login</small></a></th>

                </tr>
            </table>

        </div>

        <div class="content">
            <h1>The Perfect Room For You</h1>
            <p>Save Time, Energy And Money - Find And Book Your New Home 100% Online.</p>
      
            </div>
            
            <div class="searchbar">
      
                 <input type="text" placeholder="Search for Areas in Ahmedabad">
                 <button type="Submit">Search</button>
      
            </div>

        </div>

    
    <!-- --Card--- -->

    <div class="list-container">
    
        <div class="left-col">

            <h1>Recommended Places In Ahmedabad</h1>


            <?php
                session_start();
                $_SESSION['sign_in'] = 0;   
                if(isset($_POST['apply']))
                {
                    if($_POST['rdobtn'] != "" && $_POST['price1'] != "" && $_POST['price2'] != "" && $_POST['rdobtn1'] != ""  && $_POST['rdobtn2'] != "")
                    {
                        $_SESSION['r'] = $_POST['rdobtn'];
                        $_SESSION['p1'] = $_POST['price1'];
                        $_SESSION['p2'] = $_POST['price2'];
                        $_SESSION['r1'] = $_POST['rdobtn1'];
                        $_SESSION['r2'] = $_POST['rdobtn2'];
                        header('Location: filters.php');   
                    }
                    else 
                    {
                        echo '<script>alert("Please Select All Filters. So we can Serve you Accurate data as you want.")</script>';
                    }
                }

                // Connection to Database
                $conn = new mysqli('localhost','root','','clg_project');
                
                $query = "SELECT * FROM listing_1_table t1 INNER JOIN listing_2_table t2 ON t1.L_email=t2.L_email WHERE Approve=1";
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
                        $mail = $row['L_email'];
                        $p_type = $row['Property_type'];

                        $sqrt = $row['Sqrt'];
                        $age = $row['Construction_age'];
                        $rent = $row['Rent'];
                        $maintainance = $row['Maintainance'];
                        $image = $row['Image_1'];
                        $p_desc = $row['P_desc'];
                        $map_url = $row['map_url'];

                        echo "
                            <div class='house'>
                        <div class='house-img'>
                    <img src='$image' width='350' height='250'>
                </div>
              
                <div class='house-info'>
                    <div class='price'><b> $rent <i class='fa-solid fa-indian-rupee-sign'></i> / Month </b><span class='maps'><a class='view' href='$map_url'>View on Map <i class='fa-solid fa-map-location-dot'></i></a></span></div>
                    <p id='name'>  $bedroom BHK  $p_type  For Rent in 
                    $soc</p><span class='location'>$area, Ahmedabad <i class='fa-solid fa-location-dot'></i></span>
                    <p id='desc'>Check out this $p_type available for rent in $area, Ahmedabad. Just a five-minute walk from the $nr. It is a $bedroom BHK unit that comes at an affordable rent, with modern features and premium amenities to suit your lifestyle needs. The unit is $furnished.<br><br></p>
    
                </div>

                <div class='amenities'>
                    <p>
                        <span class='box'><i class='fa-solid fa-fan'></i> $ac Air Conditioner</span> 
                        <span class='box'><i class='fa-solid fa-tv'></i> $tv Television</span>
                        <span class='box'><i class='fa-solid fa-wifi'></i> Free Wifi</span> 
                        <span class='box'><i class='fa-solid fa-bed'></i> $bedroom Bedroom</span>
                        <span class='box'><i class='fa-solid fa-bath'></i> $bathroom Bathroom</span> 
                    </p> 
                </div>

                <div class='box_footer'>
                    <div class='owner_contact'>
                        <a href=''><b>Contact Owner<b></a>
                    </div>
                    <div class='booking'>
                        <a href='detail_view.php?mail=$mail'>View Details</a>
                    </div>
                </div>

                <div class='stars'>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star-half-stroke'></i>
                    </div>

            </div> <br><br><br><br>";
                        }

            ?>

            <!-- 

            https://images.pexels.com/photos/1428348/pexels-photo-1428348.jpeg?auto=compress&cs=tinysrgb&w=600
            
            https://images.pexels.com/photos/2029783/pexels-photo-2029783.jpeg?auto=compress&cs=tinysrgb&w=600
            
            https://images.pexels.com/photos/7587809/pexels-photo-7587809.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load 

            https://images.pexels.com/photos/3935313/   pexels-photo-3935313.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="img1

            -->

        <!-- Right Side -->

        </div>

        <div class="right-col">
            <form action="" method="POST">
            <div class="sidebar">
                <h2>Select Filters</h2><br>
                <h3>House Type :</h3><br>
                <div class="filter">
                    <input type="radio" value="Rowhouse" name="rdobtn">&nbsp&nbsp<b>Rowhouse</b><br>
                    <input type="radio" value="Flat/Apartment" name="rdobtn">&nbsp&nbsp<b>Flat</b><br>
                    <input type="radio" value="Bunglow" name="rdobtn">&nbsp&nbsp<b>Bunglow</b><br>
                    <input type="radio" value="Villa" name="rdobtn">&nbsp&nbsp<b>Villa</b><br>
                    <input type="radio" value="Penthouse" name="rdobtn">&nbsp&nbsp<b>Penthouse</b><br>
                </div>
                <br>
                <h3>Price :</h3><br>
                <div class="filter">
                    <input type="text" name="price1" placeholder="Min"><br>
                    <input type="text" name="price2" placeholder="Max"><br>
                </div>
                <br>
                <h3>Bedroom | Hall | Kitchen : </h3><br>
                <div class="filter">
                    <input type="radio" name="rdobtn1" value="1">&nbsp&nbsp<b>1 BHK</b><br>
                    <input type="radio" name="rdobtn1" value="2">&nbsp&nbsp<b>2 BHK</b><br>
                    <input type="radio" name="rdobtn1" value="3">&nbsp&nbsp<b>3 BHK</b><br>
                    <input type="radio" name="rdobtn1" value="4">&nbsp&nbsp<b>4 BHK</b><br>
                    <input type="radio" name="rdobtn1" value="5">&nbsp&nbsp<b>5 BHK</b><br>
                    <input type="radio" name="rdobtn1" value="6">&nbsp&nbsp<b>6 BHK</b><br>
                </div>
                <br>
                <h3>Furniture : </h3><br>
                <div class="filter">
                    <input type="radio" name="rdobtn2" value="Fully Furnished">&nbsp&nbsp<b>Fully-Furnished</b><br>
                    <input type="radio" name="rdobtn2" value="Semi Furnished">&nbsp&nbsp<b>Semi-Furnished</b><br>
                    <input type="radio" name="rdobtn2" value="No Furnished">&nbsp&nbsp<b>Unfurnished</b><br>
                </div>
                <br>

            
                <br><br>
                <div class="applybtn">
                <input type="submit" value="Apply filters" name="apply">          
                </div>
            </div>  
            </form>
        </div>
    
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