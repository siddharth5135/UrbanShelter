<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the rooms</title>
	<link rel="stylesheet" type="text/css" href="listing.css">
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
     
     input[type=number] 
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

        
                 // Connection to Database
                 $conn = new mysqli('localhost','root','','clg_project');
                 
                 session_start();
                 
                 if(isset($_POST['next']))
                 {
                       $iam = $_POST['person_type'];
                       $f_name = $_POST['first_name'];
                       $l_name = $_POST['last_name'];
                       $mail = $_POST['email']; 
                       
                       $approve = 0;
                       $_SESSION['app'] = $approve;


                if($_SESSION['sign_in']==1)
                {
                    if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email']))
                    {  
                           
                        $query = "Select * From listing_common_table Where L_email = '$mail'";
                        $run1 = mysqli_query($conn,$query);
                        $data = mysqli_num_rows($run1);

                        if($data==1)
                        {
                            echo '<script>alert("Email Already Registered. Please Signup again with another email ID.")</script>';
                        }
                        else 
                        {
                           // session_start();
                           $_SESSION['t_email'] = $mail;

                           
                           $sql = "INSERT INTO `listing_common_table` (`Type`, `First_name`, `Last_name`, `L_email`, `Approve`)  VALUES ('$iam', '$f_name', '$l_name', '$mail','$approve')";    
                           $run = mysqli_query($conn,$sql);

                          if($run)
                          {
        
                                header('Location: listing_1.php');
                                // echo $_SESSION['sign_in'];                                                        
                          }
                          else
                          {
                            echo '<script>alert("Enter Data Properly")</script>';
                          }

                        }
                    }
                    else 
                    {
                         echo '<script>alert("Enter Valid Email")</script>'; 
                    }
                }
                else
                {
                    echo '<script>alert("Please Signup OR Login First")</script>';
                                // echo $temp;
                }
                } 
    ?>    




	<div class="container">
	<form class="back" method="POST">
	   
       <br>
        <h2>&nbsp&nbspPersonal Details</h2>
        <br><br>
       <div class="content_center">

                <!-- Person Type -->
                <div class="t_text">I am &nbsp
                <input type="radio" name="person_type" value="Owner" required>Owner
                <input type="radio" name="person_type" value="Agent" required>Agent
                <input type="radio" name="person_type" value="Builder" required>Builder
                </div>
                <br>

                <!-- First Name -->
                <input type="text" placeholder="First Name" name="first_name" required>
		        <br><br>

                <!-- Last Name -->
                <input type="text" placeholder="Last Name" name="last_name" required>
                <br><br>     

                <!-- Email -->
                <input type="text" name="email" placeholder="Email" required>            
                <br><br><br>

                <!-- Mobile Number -->
                <input type="number" name="mobile" placeholder="Mobile" required>            
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