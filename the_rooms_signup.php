<?php

$email_error = " ";
$pass_error = " ";
$pass_lenerror = " ";
$cpass_error = " ";

session_start();
$signup = 0;
$_SESSION['sign_up'] = $signup;

//Connection to Database
$conn = new mysqli('localhost','root','','clg_project');

if(isset($_POST['Submit']))
{
    if($_POST['u_name'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['c_password'] != "")
    {
        if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email']))
        {  
          if($_POST['password'] == $_POST['c_password'])
          {
            if(strlen($_POST['password'])>=8 && strlen($_POST['password'])<=10)
            {
                
                    $u_name = $_POST['u_name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $c_password = $_POST['c_password'];
                    $password = md5($password);
                    $c_password = md5($c_password);
                
                    $query = "Select * From sign_up Where email = '$email'";
                    $run = mysqli_query($conn,$query);
                    $data = mysqli_num_rows($run);
                    if($data==1)
                    {
                       echo '<script>alert("Email Already Registered. Please Signup again with another email ID.")</script>';
                    }
                    else
                    {
                       $query = "Select * From sign_up Where username = '$u_name'";
                       $run = mysqli_query($conn,$query);
                       $data = mysqli_num_rows($run);
                       if($data==1)
                       {
                         echo '<script>alert("Username Already Registered. Please Signup again with another Username.")</script>';
                       }
                       else
                       {
                         //Submiting Values to Database

                         $sql = "INSERT INTO `sign_up` (`Email`, `Username`, `Password`, `C_password`) VALUES ('$email', '$u_name', '$password', '$c_password')";
                         $result = mysqli_query($conn,$sql);

                         if($result)
                         {
                           // echo '<script>alert("Signup Successfully  .")</script>';
                           header('Location: the_rooms_login.php');
                           session_start();
                           $_SESSION['sign_up'] = 1;
                         }
                         else
                         {
                           echo '<script>alert("Signup not Successfully.")</script>';
                         }
                       } 
                    }
            }
            else
            {
                $pass_lenerror = "*";
                echo '<script>alert("Enter Password between 8 to 12 Characters")</script>';
            }
          } 
          else
          {
             $pass_error = "*";
             $cpass_error = "*";
          }
        }
        else
        {
            $email_error = "*";
        }
    }
    else
    {
        echo '<script>alert("Please Enter Each Details")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="the_rooms_Signup.css">
    <title>Signup</title>
</head>
<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" id="Username" name="u_name">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field"> 
                <input type="text" id="Email" name="email">
                <span></span>
                <label>Email <?php print"<font color = 'red'>$email_error" ?> </label>
            </div>
            <div class="txt_field">
                <input type="password" id="Password" name="password">
                <span></span>
                 <label>Password <?php print"<font color = 'red'>$pass_error"; ?> </label>
                    <!-- print"<font color = 'red'>$pass_lenerror"; -->
            </div>
            <div class="txt_field">
                <input type="password" id="Confirm_Password" name="c_password">
                <span></span>
                <label>Confirm Password <?php print"<font color = 'red'>$cpass_error" ?> </label>
            </div>
            <input type="submit" value="Signup" name="Submit">
            <div class="login_link">
                <b>Already a member? </b><a href="the_rooms_login.php">Login</a>
            </div>
        </form>
    </div>

</body>
</html>