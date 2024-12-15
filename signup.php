<?php

	include "connection.php";
    session_start();


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
            
		//something was posted
        $username_error = $email_error = $passwd_error = NULL;
        $username= $email= $password=$confirmpassword = NULL;
		$username = trim($_POST['username']);
		$email =trim($_POST['email']);
		$password = trim($_POST['password']);
        $confirmpassword = trim($_POST['confirmpassword']);
        if(empty($username) == true & empty($email) == true & empty($password) & empty($confirmpassword) == true)
        {
            $err= "please enter some valid data";
        }

		else if (empty($username) == true || strlen($username) < 6)
        {
             $username_error = "Username must be atleast of 6 letters";
        }
        else if(empty($email) == true)
        {
            $email_error ="Email Cannot be empty";
        }
        else if((empty($password) || empty($confirmpassword)) == true || (strlen($password)<4 ))
        {
            $password_error = "Password must be atleast of 4 letters";
        }
        else if($password != $confirmpassword)
        {
            $password2_error ="Password Does Not Match";
        }
        else
		{
            $query = "select * from users where username ='$username'";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)== 1)
            {
                $username2 = "username already taken";
            }
            else
            {
			//save to database
			$query = "insert into users(username,email,password) values ('$username','$email','$password')";
			$result = mysqli_query($con, $query);
            if(isset($result) == true)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("location: encryptdecryptbox.html");
            }
            }
		}
	}
    
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page CRYPTOVAULT</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>

    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> 
        <form method="post" action="">
        <div class="content">
            <h1>ENCRYPT <br><span>&</span> <br>DECRYPT <br>your files.</h1>
                <div class="form">
                    <img src="icon.png" style="width:250px;height:160px;">
                    <input type="text" name="username"  autocomplete="off" placeholder="Enter the username">
                    <?php
                        if(isset($username_error)){
                            echo "$username_error";
                        } 
                        if(isset($username2)){
                            echo "$username2";
                        } 
                    ?>
                    <input type="email" name="email"  autocomplete="off" placeholder="Enter Email Here">
                    <?php
                        if(isset( $email_error)){
                            echo " $email_error";
                        } 
                    ?>
                    <input type="password" name="password"  autocomplete="off" placeholder="Enter Password Here">
                    <?php
                        if(isset( $password_error)){
                            echo " $password_error";
                        } 
                    ?>
                    <input type="password" name="confirmpassword"  autocomplete="off" placeholder="Confirm Password">
                    <?php
                        if(isset( $password2_error)){
                            echo " $password2_error";
                        } 
                    ?>

                    <?php
                        if(isset( $err)){
                            echo " $err";
                        } 
                    ?>
                    <button class="btnn" name="reg_user">Signup</button>
                    <br>
                    <p class="link">Already have an account?<br>
                    <a href="login.php" target="_blank">login </a> here</p>
                </div>
        </div>
        </form>
    </div>
</body>
</html>

