<!doctype html>
<html>

<head>
    <title>E-Library</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    if(empty($_POST)===false){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comment=$_POST['comments'];
        if(empty($name)===true || empty($name)===true ||empty($name)===true){
            $error[]='All blocks mandatory';
        }else if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false){
            $error[]='Enter Vaild email';
        }else{
            mail('email@kingdragon.16mb.com','Name: '.$name,'Email: '.$email.'\nComment: '.$comment,'From: email@elibrary.com');
            header('Location:index.php?submit');
        }
    }
    include "includes/head.php";
    ?>

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
    <?php include "includes/header.php"?>

    <section>
        <div class="sllider-box">
            <div id="captioned-gallery">
                <figure class="slider">
                    <figure>
                        <img src="images/2.jpg">
                    </figure>
                    <figure>
                        <img src="images/522621.jpg" usemap="gotto" />
                    </figure>
                    <figure>
                        <img src="images/4.jpg">
                    </figure>
                    <figure>
                        <img src="images/1.jpg" usemap="downapp" />
                    </figure>
                </figure>
                <map name="gotto">
                    <area shape="poly" coords="556,188,773,187,774,505,556,505" href="#" alt="Linux-Bible" class=".area1" />
                    <area shape="poly" coords="829,187,1050,186,1049,506,831,507" href="#" alt="Got set a Watchman">
                    <area shape="poly" coords="1102,187,1323,185,1322,504,1103,504" href="#" alt=blink">
                </map>
            </div>
        </div>
        <div class="new">
            <div class="word">
                <ul style="margin-bottom:0">
                    <li>
                        new arrivals
                    </li>
                </ul>
            </div>
            <div class="book">
                <ul>
                    <li>
                        <div class="ch-item img-fiction-blink">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="img-fiction-blink"></div>
                                    <div class="ch-info-back">
                                        <h3>"blink"</h3>
                                        <div class="end">
                                            <p>by Malcolm Gladwell</p>
                                        </div>
                                        <div class="space">
                                            <p>
                                                "Blink: The Power of Thinking Without Thinking (2005) is Malcolm Gladwell's second book.
                                                It presents in popular science format research from psychology and behavioral economics on the adaptive unconscious:
                                                mental processes that work rapidly and automatically from relatively little information."
                                            </p>
                                        </div>
                                    <div class="bottoma">
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="https://mega.nz/#!JkY0BAKD!-IBGD6C6ElBGP2xm-e-GAnXjUoRMxmFJCA5vkQl8FTo">Download Here</a>';}?>
                                        <a href=books/blink.php style="float:right">read online</a>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>PROJECTS</h3>
                                        <p>
                                            by King Dragon
                                            <a href="project.php">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>PROJECTS</h3>
                                        <p>
                                            by King Dragon
                                            <a href="project.php">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>PROJECTS</h3>
                                        <p>
                                            by King Dragon
                                            <a href="project.php">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="new">
            <div class="word">
                <ul style="margin-bottom:0">
                    <li>most popular</li>
                </ul>
            </div>
            <div class="book">
                <ul>
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>PROJECTS</h3>
                                        <p>
                                            by King Dragon
                                            <a href="project.php">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>PROJECTS</h3>
                                        <p>
                                            by King Dragon
                                            <a href="project.php">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item img-fiction-blink">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="img-fiction-blink"></div>
                                    <div class="ch-info-back">
                                        <h3>"blink"</h3>
                                        <div class="end">
                                            <p>by Malcolm Gladwell</p>
                                        </div>
                                        <div class="space">
                                            <p>
                                                "Blink: The Power of Thinking Without Thinking (2005) is Malcolm Gladwell's second book.
                                                It presents in popular science format research from psychology and behavioral economics on the adaptive unconscious:
                                                mental processes that work rapidly and automatically from relatively little information."
                                            </p>
                                        </div>
                                        <div class="bottoma">
                                            <a href="#" style="float:left">Download Here</a>
                                            <a href="#" style="float:right">read online</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>PROJECTS</h3>
                                        <p>
                                            by King Dragon
                                            <a href="project.php">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div id="fu">
        <img src="images/line.png" width="100%" height="5px">
    </div>
    <section>
        <div class="papa-box">
            <div class="test">
                <span class="title">testimonial</span>
                <div class="small-box">
                    <div class="data">
                        <p>
                            <img src="images/vivek.jpg">
                        </p>
                        <p style="margin:8px 0 0 10px;">
                            <strong>NAME:</strong>Vivek kashyap
                            <br>
                            <strong>BRANCH:</strong>CSE-5
                            <br>
                            <strong>UID:</strong>14BCS1510
                            <br>
                        </p>
                    </div>
                    <div class="data">
                        <p>
                            <img src="images/utkarsh.jpg">
                        </p>
                        <p style="margin:8px 0 0 10px;">
                            <strong>NAME:</strong>Utkarsh Chauhan
                            <br>
                            <strong>BRANCH:</strong>CSE-5
                            <br>
                            <strong>UID:</strong>14BCS1485
                            <br>
                        </p>
                    </div>
                    <div class="data">
                        <p>
                            <img src="images/varun.jpg">
                        </p>
                        <p style="margin:8px 0 0 10px;">
                            <strong>NAME:</strong>Varun verma
                            <br>
                            <strong>BRANCH:</strong>CSE-5
                            <br>
                            <strong>UID:</strong>14BCS1492
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="test">
                <span class="title">contact us</span>
                <div class="small-box">
                    <?php
                        if(empty($error) === false){
                          echo output_errors($error);
                        }
                    ?>
                    <form method="post" action="">
                        <ul>
                            <li>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" id="usr" placeholder="Name*" name="name">
                                </div>
                            </li>
                            <li>
                                <input type="text" class="form-control" id="email" placeholder="Email Address*" name="email">
                            </li>
                            <li>
                                <textarea class="form-control" rows="5" id="comment" placeholder="Comments*" name="comments"></textarea>
                            </li>
                            <li>
                                <div style="float:right">
                                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                                </div>
                            </li>
                        </ul>
                    </form>

                </div>
                <p style="color:red; padding-left:40px; bottom:40px; position:relative">* All blocks mandatory</p>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php"?>
    <!--  Moblie website-->
    <?php include "includes/mnav.php"?>
    <div <?php if(logged_in()== false){echo 'style="text-align:center; top:35%"';}?>  class="mobile-box" >
        <ul style="list-style:none">
        <?php
                if(logged_in() === true){
                    echo '<h1><i>Hi, '.$user_data['username'].'</i></h1><h2>Welcome to Elibrary,</h2><p><ul><li>Access any book anywhere.</li><li>Save Paper.</li>
                            <li>Categories sub-divided.</li><li>Choose by your intrests.</li></ul><p>';
                }else{
                    echo '<li><button onclick="window.location.href=\'signup.php\'" type="button" class="btn btn-primary btn-sm">Sign up<i style="text-transform:none"> for free<i>!</button></li>
                           <li><button onclick="window.location.href=\'login.php\'" type="button" class="btn btn-primary btn-sm">log in</button></li>
                        ';
                }
        ?>
        </ul>
    </div>
</body>
</html>
