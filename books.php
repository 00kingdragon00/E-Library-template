<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1, user-scalable=0;" />
    <?php
    include 'includes/init.php';
    include 'includes/function.php';
    
    include "includes/head.php";?>
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
		#footer{
			margin-top:53px;
			position:relative;
		}

        @media only screen and (max-width:768px) {
            header img {
                display: none;
            }

            header {
                height: 70px;
            }

            .list-group {
                text-align: center;
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

                a.list-group-item:hover {
                    background-color: rgba(155,146,135,.9);
                    box-shadow: none;
                }

            .list-group-item.active {
                background-color: rgba(155,146,135,.9);
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <?php include "includes/header.php";?>
    <section>
        <div class="heading">
            <h3>Books Categories</h3>
        </div>
        <div class="cat">
            <ul class="gap">
                <a href=" fiction.php">
                    <li>
                        <img src="images/fiction.png">
                    </li>
                </a>
                <a href=" non-fiction.php">
                    <li>
                        <img src="images/nonfiction.png">
                    </li>
                </a>
                <a href=" romance.php">
                    <li>
                        <img src="images/romance.png">
                    </li>
                </a>
                <a href=" drama.php">
                    <li>
                        <img src="images/drama.png">
                    </li>
                </a>
                <a href=" tragedy.php">
                    <li>
                        <img src="images/tragedy.png">
                    </li>
                </a>
                <a href=" horror.php">
                    <li>
                        <img src="images/horror.png">
                    </li>
                </a>
                <a href=" biograhpy.php">
                    <li>
                        <img src="images/biography.png">
                    </li>
                </a>
                <a href=" religious.php">
                    <li>
                        <img src="images/religious.png">
                    </li>
                </a>
                <a href=" comedy.php">
                    <li>
                        <img src="images/comedy.png">
                    </li>
                </a>
                <a href=" adventure.php">
                    <li>
                        <img src="images/adven.png">
                    </li>
                </a>
            </ul>
        </div>
    </section>
    <?php include "includes/footer.php";?> 
    <?php include "includes/mnav.php";?>
    <div class="center">
        <div class="list-group">
            <a href="fiction.php" class="list-group-item ">fiction</a>
            <a href="non-fiction.php" class="list-group-item">non-fiction</a>
            <a href="romance.php" class="list-group-item">romance</a>
            <a href="drama.php" class="list-group-item">drama</a>
            <a href="tragedy.php" class="list-group-item">tragedy</a>
            <a href="horror.php" class="list-group-item">horror</a>
            <a href="biograhpy.php" class="list-group-item">biography</a>
            <a href="religious.php" class="list-group-item">religious</a>
            <a href="comedy.php" class="list-group-item">comedy</a>
            <a href="adventure.php" class="list-group-item">adventure</a>
        </div>
    </div>
</body>
</html>
