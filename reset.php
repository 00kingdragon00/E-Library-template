<!DOCTYPE html>
<html>

<head>
    <title>reset Password</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    logged_redirect();

    if( empty($_POST) === false && empty($_GET)===false){
        $email=$_GET['email'];
        $code=$_GET['code'];

        $required_fields = array('currentpassword','password','repassword');
        foreach($_POST as $key=>$value){
            if(empty($value) && in_array($key,$required_fields) === true){
                $error[]='Please Fill all Fields.';
                break 1;
            }
        }
        if(strlen($_POST['password']) < 5){
            $error[]='Your password must be at least 5 characters';
        }
        if($_POST['password'] != $_POST['repassword']){
            $error[]='Password do no match';
        }
    }
    


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
        <h1>Reset Password</h1>
        <?php
        if(isset($_GET['success']) && empty($_GET['success'])){
            echo '<div style="width:80%; margin:auto; font-size:16px; color:rgba(62,62,62,1)">
            You\'ve been Reset password successfully.<br/>
            <br/>For Log in.<a style="color:#0B0080" href="login.php">click here</a>
            </div>';
            session_destroy();
            exit();
        }else{
            if(empty($_POST) === false && empty($error) === true && empty($_GET) ===false){
               reset_password($email,$_POST['password'],$code);
               header('Location:reset.php?success');
            }else if(empty($error)===false){
                echo output_errors($error);
            }
            
        ?>
        <form method="post" action="">
            <input type="password" name="password" placeholder="New Password" id="password" />
            <input type="password" name="repassword" placeholder="Re-Type Password" id="password" />
            <button name="reset">Reset</button>
        </form>
</div>
    <?php 
        }
        include "includes/mnav.php";?>
</body>
</html>

