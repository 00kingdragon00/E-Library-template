<!DOCTYPE html>
<html>

<head>
    <title>E-library- Log in</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';

    if(isset($_POST['signin'])){
    if (empty($_POST) === false){
        $username = $_POST['username'];
        $password = $_POST['password'];   
    }

    if (empty($username) === true || empty($password) === true){
        $error[] = 'You need to enter a username and password';
    } else if(user_exists($username,$con) === false){
        $error[] = 'Username don\'t exits'; 
    } else if(user_active($username,$con) === false){
        $error[] = 'You haven\'t activated your account';
    
    }else{
        $login = login($username,$password,$con);
        if($login===false){
            $error[] = 'Username and Password is invalid';       
        }else {
            $_SESSION['user_id']=$login;
            header('Location:index.php');
            exit();
        }

    }}



    include "includes/head.php";?>
    <style>
        #logo {
            display: none;
        }

        @media only screen and (max-width:768px) {
            #logo {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div id="he"></div>
    <a href="index.php">
        <div class="logo"></div>
    </a>
    <div class="login-block">
        <?php 
            if (empty($error)===false){
            echo output_errors($error);}?>
        <form method="post" action="login.php">
        <h1>Login</h1>
        <input type="text" placeholder="Username" id="username" name="username" />
        <input type="password"  placeholder="Password" id="password" name="password" />
        <button name="signin">Sign in</button>
        </form>
    </div>
    <div class="forgot">
        <a href="signup.php">Create an account.</a>
        <a href="forgot.php">Forgot password?</a>
    </div>
    <?php include "includes/mnav.php";?>

</body>
</html>

