<!DOCTYPE html>
<html>

<head>
    <title>reset Password</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    include "includes/head.php";
    if(empty($_POST) === false){
        $required_fields = array('currentpassword','password','repassword');
        foreach($_POST as $key=>$value){
            if(empty($value) && in_array($key,$required_fields) === true){
                $error[]='Please Fill all Fields.';
                break 1;
            }
        }
        if(md5($_POST['currentpassword']) === $user_data['password']){
            if(trim($_POST['password']) !== trim($_POST['repassword'])){
                $error[]='Your new passwords do not match';
            }else if(strlen($_POST['password']) < 5){
                $error[]='Your password must be at least 5 characters';
            }
        }else{
            $error[]='Your current password is incorrect';
        }

    }
    
    ?>
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
        <h1>Change Password</h1>
        <?php
        if(isset($_GET['success']) && empty($_GET['success'])){
            echo '<div style="width:80%; margin:auto; font-size:16px; color:rgba(62,62,62,1)">
            You\'ve been change password successfully.<br/>
            <br/>Please Log in again.<a style="color:#0B0080" href="login.php">click here for login</a>
            </div>';
            session_destroy();
            exit();
        }else{

            if(empty($_POST) === false && empty($error) === true){
                change_password($session_user_id,$_POST['password']);
                header('Location:changepass.php?success');
            }else if(empty($error)===false){
                echo output_errors($error);
            }
        ?>
        <form method="post" action="">
            <input type="password" name="currentpassword" placeholder="Current Password" id="password" />
            <input type="password" name="password" placeholder="New Password" id="password" />
            <input type="password" name="repassword" placeholder="Re-Type Password" id="password" />
            <button name="change">Change Password</button>
        </form>
    </div>
    <?php 
        }
        include "includes/mnav.php";?>
</body>
</html>

