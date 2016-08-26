<!DOCTYPE html>
<html>

<head>
    <title>E-Library</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    logged_redirect();
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
        <h1>Verify Account</h1>
        <?php
            if (empty($_POST['email']) === false && isset($_POST['email'])=== true){
                if(email_exists($_POST['email'],$con)===true){
                    $email=$_POST['email'];
                    recover_pass($email);
                    header('Location:verify.php?email='.$email.'&success');
                }else{
                    $error[]='Oops, we couldn\'t find that email address!';
                    echo output_errors($error);
                }

            }
        ?>

        <form method="post" action="forgot.php">
            <input type="text" name="email" placeholder="Email" id="email" />
            <button name=" verify">Verify</button>
        </form>
</div>
    <?php  include "includes/mnav.php";?>

</body>
</html>

