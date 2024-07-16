<?php

session_start();
$signin = 0;
$_SESSION['sign_in'] = $signin;

//Connection to Database
$conn = new mysqli('localhost','root','','clg_project');


if(isset($_POST['Submit']))
{
    if($_POST['u_name'] != "" && $_POST['password'] != "")
    { 

            $u_name = $_POST['u_name'];
            $_SESSION['temp_uname'] = $u_name;
            $password = $_POST['password'];
            $e_password = md5($password);
 
            $sql = "Select * from sign_up where username='$u_name' AND password='$e_password'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            
            if(isset($_POST['remember']))
            {
                setcookie("Member_Name",$u_name);
                setcookie("Member_Password",$password);
            }

            if($num>0)
            {
                $_SESSION['sign_in'] = 1;
                header('Location: the_rooms_1.php');
                
                
                echo $_SESSION['sign_in'];
            }
            else if($u_name=="admin" && $password=="12345678")
            {
                header('Location: approve.php');
            }
            else
            {
                echo '<script>alert("Invalid Username or Password")</script>';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="the_rooms_login.css">
    <title>PG FINDER LOGINs</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="u_name" value="<?php if(isset($_COOKIE['Member_Name'])) { echo $_COOKIE['Member_Name']; } ?>">
                <span></span>
                <label>Username </label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" value="<?php if(isset($_COOKIE['Member_Password'])) { echo $_COOKIE['Member_Password']; } ?>">
                <span></span>
                <label>Password</label>
            </div>
            <div class="ckh">
                <input type="checkbox" name="remember">Remember Me
            </div>
            <br><br>
            <input type="submit" value="Login" name="Submit">
            <div class="signup_link">
                <a href="the_rooms_signup.php">Not a member? Signup</a>
            </div>
        </form>
    </div>
</body>
</html>