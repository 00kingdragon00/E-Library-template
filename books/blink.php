<!DOCTYPE html>
<html>
<head>
    <title>Blink</title>
	<meta charset="utf-8" />
    <?php
    include '../includes/init.php';
    include '../includes/function.php';
    ?>
    <meta name="viewport" content="width=device-width, inital-scale=1, user-scalable=0;" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/slider.css" />
    <link rel="stylesheet" href="../css/style4.css" />
    <link rel="stylesheet" href="../css/image.css" />
    <link rel="stylesheet" type="text/css" href="../css/book.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <script src="../js/jquery-1.12.3.js"></script>
    <script>
        $(document).ready(function () {
            $("#togg").click(function () {
                $("#togg").animate({ right: '50%' });
                $("#main_nav").animate({ right: '0px' });
                setInterval(function () {
                    $("#main_nav").animate({ right: '-50%' });
                    $("#togg").animate({ right: '20px' });
                },5000);

            });
            $("#hide").click(function () {
                $(".show").css({ "display": "block" });
                $(".show").mouseleave(function () { $(".show").css({ "display": "none" })});
            });
        });

    </script>
    <style>
        button {
            text-transform: uppercase;
        }

        .btn-primary, .btn-info {
            background-color: rgba(62,62,62,1.00);
            border-color: rgba(155,146,135,1.00);
        }

            .btn-primary:hover, .btn-info:hover {
                background-color: rgba(155,146,135,1.00);
                border-color: rgba(62,62,62,1.00);
            }

        .col-xs-5 {
            float: none;
            padding-left: 0;
        }

        @media only screen and (min-width:0px) and (max-width:768px) {
            header img {
                display: none;
            }

            header {
                height: 70px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="../index.php">
            <div id="logo"></div>
        </a>
        <div id="mainnav">
            <ul>
                <li>
                    <a href="../index.php">home</a>
                </li>
                <li>
                    <a href="../books.php">books</a>
                </li>
                <?php
                if(logged_in() === true){
                    echo '<li id="hide" style="color:rgba(155,146,135,1); cursor:pointer">Hi,'.$user_data['username'].'!</li>';
                }else{
                    echo '<li><button onclick="window.location.href=\'../login.php\'" type="button" class="btn btn-primary btn-sm">sign in</button></li>';
                }

                ?>
            </ul>
        </div>
    </header>
    <iframe src="https://drive.google.com/file/d/0B_P4QmXkhicFSDNiOTB1a0JxSEE/preview"></iframe>
    <section>
        <a href="../index.php">
            <div id="logo"></div>
        </a>
        <div id="togg" style="cursor:pointer">
            <img src="../images/togg.png" />
        </div>
        <div id="main_nav">
            <a href="../index.php">
                <li>Home</li>
            </a>
            <a href="../books.php">
                <li>books</li>
            </a>
            <?php
            if(logged_in() === true){
                echo '<a href="../changepass.php"><li>change password</li></a>';
                echo '<a href="../logout.php"><li>sign out</li></a>';
            }
            ?>
            <p>&copy;Copyright E-library.All Right Reserved.</p>
        </div>
    </section>
</body>
</html>
