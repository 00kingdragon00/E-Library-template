<!DOCTYPE html>
<html>

<head>
    <title>verify email</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    logged_redirect();

        if( empty($_POST) === false && empty($_GET)===false){
            $email=$_GET['email'];
            $code=$_POST['code'];
            $user_data=user_data(user_id_from_email($email),'username','code');
            if( $code !== $user_data['code']){
                $error[]='Code is incorrect';
            }else{
                header('Location:reset.php?email='.$email.'&code='.$code);
            }
        }else{ 
            $error[]='Please, Enter verification code';
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
        <h1>Verify Code</h1>
        <?php echo output_errors($error);?>
        <form method="post" action="">
            <input type="text" name="code" placeholder="Code" id="code" />
            <button name="verify">Verify</button>
        </form>
    </div>
    
    <?php include "includes/mnav.php";?>
</body>
</html>

