<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1, user-scalable=0;" />
    <title>Non-Fiction Books</title>
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    include "includes/head.php";?>
    <script src="js/bootstrap.min.js"></script>
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

        .cat li {
            display: inline-block;
            margin: 20px;
        }


        .cat {
            text-align: center;
        }

            .cat ul {
                padding: 0;
            }

        @media only screen and (max-width:768px) {
            header img {
                display: none;
            }

            header {
                height: 70px;
            }

            .list-group-item {
                margin: 5px 0;
                background-color: rgba(62,62,62,.5);
                border: 2px solid rgba(62,62,62,1.0);
                box-shadow: 2px 2px 2px rgba(62,62,62,1.0);
            }

            a.list-group-item {
                text-transform: uppercase;
                color: rgba(155,146,135,1.0);
            }

                a.list-group-item:hover, a.list-group-item:focus {
                    background-color: rgba(155,146,135,.9);
                    box-shadow: none;
                    color: rgba(62,62,62,1);
                }
        }
    </style>
</head>
<body>
    <?php include "includes/header.php";?>
    <section>
        <div class="heading">
            <h3>non-Fiction Books</h3>
        </div>
        <div class="cat">
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
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="#">Download Here</a>';}?>
                                        <a href="#" style="float:right">read online</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item img-fiction-meluha">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="img-fiction-meluha"></div>
                                <div class="ch-info-back">
                                    <p style="margin:5px 0 0 0; text-transform:uppercase; font-size:14px; font-style:normal">"The Immortals Of</p>
                                    <h3 style="margin-top:2px">meluha"</h3>
                                    <div class="end">
                                        <p>by Amish Tripathi</p>
                                    </div>
                                    <div class="space">
                                        <p>
                                            "The Immortals of Meluha is the first novel of the Shiva trilogy series by Amish Tripathi.
                                            The story is set in the land of Meluha and starts with the arrival of the Shiva.
                                            The Meluhan believe that Shiva is their fabled saviour Neelkanth."
                                        </p>
                                    </div>
                                    <div class="bottoma">
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="#">Download Here</a>';}?>>
                                        <a href="#" style="float:right">read online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item img-fiction-throne">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="img-fiction-throne"></div>
                                <div class="ch-info-back">
                                    <p style="margin:5px 0 0 0; text-transform:uppercase; font-size:14px; font-style:normal">"a game of</p>
                                    <h3 style="margin-top:2px">throne"</h3>
                                    <div class="end">
                                        <p>by George R. R. Martin</p>
                                    </div>
                                    <div class="space">
                                        <p>
                                            "A Game of Thrones is the first novel in A Song of Ice and Fire,
                                            a series of high fantasy novels by American author George R. R. Martin.
                                            It was first published on August 6, 1996."
                                        </p>
                                    </div>
                                    <div class="bottoma">
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="#">Download Here</a>';}?>
                                        <a href="#" style="float:right">read online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item img-fiction-warchman">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="img-fiction-warchman"></div>
                                <div class="ch-info-back">
                                    <p style="margin:5px 0 0 0; text-transform:uppercase; font-size:14px; font-style:normal">"go set a</p>
                                    <h3 style="margin-top:2px">watchman"</h3>
                                    <div class="end">
                                        <p>by Harper Lee</p>
                                    </div>
                                    <div class="space">
                                        <p>
                                            "Go Set a Watchman is a novel by Harper Lee published on July 14, 2015,
                                            by HarperCollins in the United States and William Heinemann in the United Kingdom."
                                        </p>
                                    </div>
                                    <div class="bottoma">
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="#">Download Here</a>';}?>
                                        <a href="#" style="float:right">read online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item img-fiction-warz">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="img-fiction-warz"></div>
                                <div class="ch-info-back">
                                    <h3>"world war z"</h3>
                                    <div class="end">
                                        <p>by Max Brooks</p>
                                    </div>
                                    <div class="space">
                                        <p>
                                            "World War Z: An Oral History of the Zombie War is an apocalyptic horror novel by Max Brooks.
                                            The novel is a collection of individual accounts narrated by an agent of the United Nations Postwar Commission, ..."
                                        </p>
                                    </div>
                                    <div class="bottoma">
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="#">Download Here</a>';}?>
                                        <a href="#" style="float:right">read online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item img-fiction-watership">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="img-fiction-watership"></div>
                                <div class="ch-info-back">
                                    <h3>"Watership Down"</h3>
                                    <div class="end">
                                        <p>by Richard Adams</p>
                                    </div>
                                    <div class="space">
                                        <p>
                                            "Watership Down is a classic adventure novel,
                                            written by English author Richard Adams,
                                            published by Rex Collings Ltd of London in 1972.
                                            Set in southern England, the story features a small group of rabbits"
                                        </p>
                                    </div>
                                    <div class="bottoma">
                                        <?php if(logged_in() === false){echo '<a href="login.php">Download Here</a>';}else{echo '<a href="#">Download Here</a>';}?>
                                        <a href="#" style="float:right">read online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <?php include "includes/footer.php";?>
    <?php include "includes/mnav.php";?>
    <div class="center">
        <div class="list-group">
            <a href="#blink" data-toggle="collapse" class="list-group-item">
                "
                <strong>blink:The Power of Thinking Without Thinking</strong>
                "
            </a>
            <div id="blink" class="panel-collapse collapse">
                <div class="detail">
                    <div>
                        <img src="images/fiction/blink.jpg" width="110px" height="150px" />
                    </div>
                    <div class="space">
                        <h3>"blink"</h3>
                        <p style="text-align:end;">by Malcolm Gladwell</p>
                        <p>
                            "Blink: The Power of Thinking Without Thinking (2005)
                            <br />
                            is Malcolm Gladwell's second book.
                        </p>
                        <div class="bottoma">
                            <ul>
                                <?php
                                if(logged_in() ===false){
                                    echo '<li><a href="login.php">Download Here</a></li>';
                                }else{echo '<li><a href="#">Download Here</a></li>';}?>

                                <li>
                                    <a href="#">read online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#meluha" data-toggle="collapse" class="list-group-item">
                "
                <strong>the immortals ofmeluha</strong>
                "
            </a>
            <div id="meluha" class="panel-collapse collapse">
                <div class="detail">
                    <div>
                        <img src="images/fiction/the-immortals-of-meluha.jpg" width="110px" height="150px" />
                    </div>
                    <div class="space">
                        <h3>"the immortals of meluha"</h3>
                        <p style="text-align:end">by Amish Tripathi</p>
                        <p>
                            "The Immortals of Meluha is the first novel of
                            <br />
                            the Shiva trilogy series by Amish Tripathi.
                        </p>
                        <div class="bottoma">
                            <ul>
                                <?php
                                if(logged_in() ===false){
                                    echo '<li><a href="login.php">Download Here</a></li>';
                                }else{echo '<li><a href="#">Download Here</a></li>';}
                                ?>
                                <li>
                                    <a href="#">read online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#throne" data-toggle="collapse" class="list-group-item">
                "
                <strong>a game of throne</strong>
                "
            </a>
            <div id="throne" class="panel-collapse collapse">
                <div class="detail">
                    <div>
                        <img src="images/fiction/a-game-of-thrones.jpg" width="110px" height="150px" />
                    </div>
                    <div class="space">
                        <h3>"a game of throne"</h3>
                        <p style="text-align:end">by George R. R. Martin</p>
                        <p>
                            "A Game of Thrones is the first novel in A Song of Ice and Fire,
                            <br />
                            a series of high fantasy novels.
                        </p>
                        <div class="bottoma">
                            <ul>
                                <?php
                                if(logged_in() ===false){
                                    echo '<li><a href="login.php">Download Here</a></li>';
                                }else{echo '<li><a href="#">Download Here</a></li>';}
                                ?>
                                <li>
                                    <a href="#">read online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#watchman" data-toggle="collapse" class="list-group-item">
                "
                <strong>go set a watchman</strong>
                "
            </a>
            <div id="watchman" class="panel-collapse collapse">
                <div class="detail">
                    <div>
                        <img src="images/fiction/go-set-a-watchman.jpg" width="110px" height="150px" />
                    </div>
                    <div class="space">
                        <h3>"go set a watchman"</h3>
                        <p style="text-align:end">by Harper Lee</p>
                        <p>
                            "Go Set a Watchman is a novel by Harper Lee
                            <br />
                            published on July 14, 2015,
                            <br />
                            by HarperCollins in the United States
                            <br />
                            and William Heinemann in the United Kingdom.
                        </p>
                        <div class="bottoma">
                            <ul>
                                <?php
                                if(logged_in() ===false){
                                    echo '<li><a href="login.php">Download Here</a></li>';
                                }else{echo '<li><a href="#">Download Here</a></li>';}
                                ?>
                                <li>
                                    <a href="#">read online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#warz" data-toggle="collapse" class="list-group-item">
                "
                <strong>world war z</strong>
                "
            </a>
            <div id="warz" class="panel-collapse collapse">
                <div class="detail">
                    <div>
                        <img src="../images/fiction/World_War_Z.jpg" width="110px" height="150px" />
                    </div>
                    <div class="space">
                        <h3>"world war z"</h3>
                        <p style="text-align:end">by Max Brooks</p>
                        <p>
                            "World War Z: An Oral History of the Zombie War is
                            <br />
                            an apocalyptic horror novel by Max Brooks.
                        </p>
                        <div class="bottoma">
                            <ul>
                                <?php
                                if(logged_in() ===false){
                                    echo '<li><a href="login.php">Download Here</a></li>';
                                }else{echo '<li><a href="#">Download Here</a></li>';}
                                ?>
                                <li>
                                    <a href="#">read online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#watership" data-toggle="collapse" class="list-group-item">
                "
                <strong>watership down</strong>
                "
            </a>
            <div id="watership" class="panel-collapse collapse">
                <div class="detail">
                    <div>
                        <img src="images/fiction/Watership_Down.jpg" width="110px" height="150px" />
                    </div>
                    <div class="space">
                        <h3>"watership down"</h3>
                        <p style="text-align:end">by Richard Adams</p>
                        <p>
                            "Watership Down is a classic adventure novel, written by
                            <br />
                            English author Richard Adams.
                        </p>
                        <div class="bottoma">
                            <ul>
                                <?php
                                if(logged_in() === false){
                                        echo '<li><a href="login.php">Download Here</a></li>';
                                    }else{echo '<li><a href="#">Download Here</a></li>';}
                                ?>
                                <li>
                                    <a href="#">read online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
