<!DOCTYPE html>
<html>

<head>
    <title>E-library- Log in</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
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
    <div class="signup-block">
        <h1>Activate Account</h1>
        <?php
        if(isset($_GET['success']) && empty($_GET['success'])){
            echo '<div style="width:80%; margin:auto; font-size:16px; color:rgba(62,62,62,1)">
            <h3>Thanks,We\'ve activated your account..</h3><br/>Your are free to <a href="login.php>"log in!</a>.
            </div>';
        }else{
            if(isset($_GET['email'],$_GET['email_code']) === true){
                $email = trim($_GET['email']);
                $email_code = trim($_GET['email_code']);
                if(email_exists($email,$con) === false){
                    $error[] = 'Oops, something went wrong , and we couldn\'t find that email address.';
                    echo output_errors($error);
                }else if(activate($email,$email_code) === false){
                    $error[]='We had problems activating your account';
                    echo output_errors($error);
                }else{
                    header('Location: activate.php?success');
                }
 
            }else{
                header("Location:index.php");
            }
            
        ?>

    </div>

    <?php 
        }
        include "includes/mnav.php";?>

</body>
</html>

