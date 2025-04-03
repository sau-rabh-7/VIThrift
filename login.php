<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIThrift Sign In</title>
    <link rel="shortcut icon" href="./assets/images/logo/V.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7c71b3cbda.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Monoton&display=swap" rel="stylesheet">
<style>
    .logo-container{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .website-title-logo{
        font-size: 2rem;
        font-family: Carter One, sans-serif;
        color: #088178  ;
    }
    .form-container{
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Poppins, sans-serif;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        align-content: space-around;
        margin: 20px;
        padding: 20px;
        border: 1px solid hsl(0, 0%, 90%);
        border-radius: 10px;
        width: 350px;
    }
    .form-item{
        margin: 10px 0;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .form-type{
        font-size: 2rem;
        font-weight: bold;
        letter-spacing: 1px
    }
    input[type="text"], input[type="password"]{
        width: 90%;
        padding: 10px 15px;
        border:1px solid hsl(0, 0%, 90%);
        color: hsl(0, 0%, 27%);
        border-radius: 5px;
    }
    .link{
        text-decoration: none;
        color: #088178;
    }
    .link, .no-account-text{
        font-size: 0.875rem;
    }
    .btn{
        width: 90%;
        padding: 10px 15px;
        color: white;
        background-color: #088178;
        border: none;
        border-radius: 5px;
        font-size: 1.1rem;
        letter-spacing: 1px;
    }
    .btn:hover{
        background-color: black;
        transition: 0.2s ease;
    }
    #invalid-username-password{
        color: red;
    }
</style>
</head>
<body>
    <div class="logo-container">
    <div class="website-title-logo">VIThrift</div>
    </div>
    <div class="form-container">
    <div class="form">
        <form action="login.php" method="post">
            <div class="form-item">
                <div class="form-type">Login</div>
            </div>
            <div class="form-item">
                <input type="text" placeholder="Enter Your Username" name="user_name" class="form_input">
            </div>
            <div class="form-item">
                <input type="password" placeholder="Enter Your Password" name="password" class="form-input">
            </div>
            <div class="form-item">
                <a href="#" class="link">
                    Forgot Password?
                </a>
            </div>
            <div class="form-item" id="invalid-username-password">
            <!-- <?php
            if (isset($_SESSION['login_error'])) {
                echo $_SESSION['login_error']; // Display the error message
            }
            ?> -->
            </div>
            <div class="form-item">
                <input type="submit" value="Login" name="login" class="btn">
            </div>
            <div class="form-item">
                <span class="no-account-text">Don't have an account? &nbsp;</span>
                <a href="signup.php" class="link">Signup</a>
            </div>
        </form>
    </div>
    </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>