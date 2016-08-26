<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    logged_redirect();
    include "includes/head.php";
        if(empty($_POST) === false){
            $required_fields = array('username','firstname','lastname','email','password','repassword');
            foreach($_POST as $key=>$value){
                if(empty($value) && in_array($key,$required_fields) === true){
                    $error[]='Please Fill all Fields.';
                    break 1;
                }
            }
            if(empty($error) === true){
                if(user_exists($_POST['username'],$con)===true){
                    $error[] = 'Sorry, the username \''.$_POST['username'].'\' is already taken';
                }
                if(preg_match("/\\s/",$_POST['username']) == true){
                    $error[]='Your username must not contain space';
                }
                if(strlen($_POST['password']) < 5){
                    $error[]='Your password must be at least 5 characters';
                }
                if($_POST['password'] != $_POST['repassword']){
                    $error[]='Password do no match';
                }
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false){
                    $error[]='Enter Vaild email';
                }
                if(email_exists($_POST['email'],$con) === true){
                    $error[] = 'Sorry, the email \''.$_POST['email'].'\' is already register';
                }
            
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
    <div class="signup-block">
        <h1>sign up</h1>
        <?php
        if(isset($_GET['success']) && empty($_GET['success'])){
            echo '<div style="width:80%; margin:auto; font-size:16px; color:rgba(62,62,62,1)">
            <h2>Hi!</h2><br/>
            You\'ve been register successfully.<br/>
            <br/>Activation link is send to your email please verify your account.
            </div>';
        }else{
            if (empty($error)===true && empty($_POST)===false){
                $register_data = array(
                    'username'=> $_POST['username'],
                    'password'=> $_POST['password'],
                    'first_name'=> $_POST['firstname'],
                    'last_name'=> $_POST['lastname'],
                    'email'=> $_POST['email'],
                    'email_code'=>md5($_POST['username'] + microtime())
                    );
                register_user($register_data);
                header('Location: signup.php?success');
            }else if (empty($error)===false){
                echo output_errors($error);
            }
            
        ?>
        <form method="post" action="signup.php">
            <table>
                <tr>
                    <td><input type="text" name="username" placeholder="Username" id="username" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="firstname" placeholder="Firstname" id="firstname" /></td>
                    <td><input type="text" name="lastname" placeholder="Lastname" id="lastname" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="email" placeholder="Email" id="email" /></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Password" id="password" /></td>
                    <td><input type="password" name="repassword" placeholder="Re-Type Password" id="repassword" /></td>
                </tr>
                <tr>
                    <td colspan="2"><button name="signup">Sign up</button></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="login.php">Already Have Account.</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php 
        }
        include "includes/mnav.php";?>
</body>
</html>

