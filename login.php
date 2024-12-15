
<?php 

include "connection.php" ;


session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$username= $email= $password = NULL;
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if(!empty($username) == true &&  !empty($password) == true)
		{
			$query = "select * from users where username = '$username' and password = '$password' ";
			$result = mysqli_query($con, $query);
			$user_data = mysqli_fetch_assoc($result);
			if(mysqli_num_rows($result) == 1 )
			{
				if($user_data['username']== $username && $user_data['password'] == $password)
				{
					$_SESSION['username'] = $user_data['username'];
					$_SESSION['password'] = $user_data['password'];
					header("Location:encryptdecryptbox.html");
				}
				
			}
			else
			{
				$err= "wrong username or password";
			}
		}
		else
			{
				$err= "wrong username or password";
			}
	}
	mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page CRYPTOVAULT</title>
    <link rel="stylesheet" href="login.css">
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
                    <input type="text" name="username"  autocomplete="off" placeholder="Enter username">
					<?php 
							if(isset($err)){
								echo "$err";
							}
					?>
                    <input type="password" name="password" autocomplete="off" placeholder="Enter Password Here">
                    <button class="btnn">Login</button>
                    <p class="link">Don't have an account?<br>
                    <a href="signup.php" target="_blank">Sign up </a> here</p>
                </div>
        </div>
    </div>
</body>
</html>