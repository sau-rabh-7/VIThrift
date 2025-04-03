<?php 
session_start();

// Include necessary files
include("connection.php");
include("functions.php");

// Fetch the logged-in user's name from the session
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest'; // Default to "Guest" if not set

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIThrift
    </title>
    <link rel="shortcut icon" href="./assets/images/logo/V.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7c71b3cbda.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Monoton&display=swap" rel="stylesheet">
  <style>
    :root {
  --spanish-gray: hsl(0, 0%, 60%);
  --sonic-silver: hsl(0, 0%, 47%);
  --eerie-black: hsl(0, 0%, 13%);
  /* --salmon-pink: hsl(353, 100%, 78%); */
  --salmon-pink: #088178;
  --sandy-brown: hsl(29, 90%, 65%);
  /* --bittersweet: hsl(0, 100%, 70%); */
  --bittersweet: #088178;
  --ocean-green: hsl(152, 51%, 52%);
  --davys-gray: hsl(0, 0%, 33%);
  --cultured: hsl(0, 0%, 93%);
  --white: hsl(0, 100%, 100%);
  --onyx: hsl(0, 0%, 27%);
  --fs-1: 1.563rem;
  --fs-2: 1.375rem;
  --fs-3: 1.25rem;
  --fs-4: 1.125rem;
  --fs-5: 1rem;
  --fs-6: 0.938rem;
  --fs-7: 0.875rem;
  --fs-8: 0.813rem;
  --fs-9: 0.75rem;
  --fs-10: 0.688rem;
  --fs-11: 0.625rem;
  --weight-300: 300;
  --weight-400: 400;
  --weight-500: 500;
  --weight-600: 600;
  --weight-700: 700;
  --border-radius-md: 10px;
  --border-radius-sm: 5px;
  --transition-timing: 0.2s ease;
}
    .logo-container{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 2px solid var(--cultured);
        padding: 5px;
    }
    .website-title-logo{
        font-size: 2rem;
        font-family: Carter One, sans-serif;
        color: #088178  ;
        cursor: pointer
        user-select: none;
        text-decoration: none;
    }
    *{
        margin: 0;
        padding: 0;
        font-family: Poppins, sans-serif;
    }
    .card{
        width: 80%;
        margin: auto;
        border: 1px solid var(--cultured);
        box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
        margin-top: 20px;
        padding: 20px;
        border-radius: 10px;
    }
    .image img{
        border-radius: 50%;
        box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .image{
        background-color: #088178;
        display: inline-block;
        padding: 20px;
        border-radius: 50%;
        z-index: 3;
    }
    .info-container{
        display: flex;
        flex-direction: row;
        align-items:center ;
        border-bottom: 1px solid var(--cultured);
        padding: 10px;
    }
    .username-container{
        display: flex;
        flex-direction: row;
        align-items: baseline;
        background-color: #088178;
        width: 600px;
        border-radius: 50px;
        padding: 20px 20px 20px 50px;
        transform: translateX(-50px);
    }
    .hello{
        font-size: 2em;
        font-weight: 500;
        margin-left: 20px ;
    }
    .username{
        margin-left: 10px;
        color: white;
        font-size: 1.1em;
    }
    .actions{
        display: flex;
        flex-direction: row;
        align-items:center ;
        border-bottom: 1px solid var(--cultured);
        padding: 10px;
        margin: 10px 0 10px 0;
    }
    .btn{
        padding: 5px 10px;
        border: 1px solid var(--cultured);
        border-radius: 5px;
        margin-right: 20px;
        color: white;
        background-color: #088178;
        cursor: pointer;
    }
    .btn:hover{
        background-color: black;
    }
    .rating{
        display: flex;
        flex-direction: row;
        align-items:center ;
        border-bottom: 1px solid var(--cultured);
        padding: 10px;
    }
    .rating-container{
        display: flex;
        flex-direction: column;
        align-items:center ;
        border: 1px solid var(--cultured);
        padding: 10px;
        border-radius: 5px;
        width: 100px;
        margin-right: 10px;
    }
    .rating-container:hover{
        background-color: hsl(0, 0%, 93%);
    }
    .number{
        font-size: 1.5em;
        font-weight: 500;
    }
    .rating-title{
        letter-spacing: 1px;
        font-size: var(--fs-8);
        color: hsl(0, 0%, 33%);
    }
    footer{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .logout{
        display: flex;
        flex-direction: row;
        align-items:center ;
        border: 1px solid var(--cultured);
        border-radius: 5px;
        padding: 5px 10px;
        margin: 10px;
        color: white;
        background-color: #d9603b;
        text-decoration: none
    }
    .logout:hover{
        background-color: black;
    }
</style>
</head>
<body>
    <div class="logo-container">
        <a href="index.php" class="website-title-logo">VIThrift</a>
    </div>
    <div class="card">
        <div class="header">
            <div class="info-container">
                <div class="image">
                    <img src="images/pp-1.png" alt="profile" width="200">
                </div>
                <div class="username-container">
                    <div class="hello">Hello,</div>
                    <div class="username"><?php echo htmlspecialchars($user_name, ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
            </div>
        </div>
        <main>
            <div class="actions">
                <div class="btn review">Create review</div>
                <div class="btn edit">Edit your profile</div>
                <div class="btn cart">View your cart</div>
            </div>
            <div class="rating">
                <div class="rating-container">
                    <div class="number">23</div>
                    <div class="rating-title">Hearts</div>
                </div>
                <div class="rating-container">
                    <div class="number">56</div>
                    <div class="rating-title">Followers</div>
                </div>
                <div class="rating-container">
                    <div class="number">34</div>
                    <div class="rating-title">Following</div>
                </div>
            </div>
        </main>
        <footer>
            <a href="index.php" class="logout">
                Go back
            </a>
            <a href="logout.php" class="logout">
                Logout
            </a>
        </footer>
    </div>
</body>
</html>