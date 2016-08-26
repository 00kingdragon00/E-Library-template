<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, inital-scale=1, user-scalable=0;" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/slider.css" />
<link rel="stylesheet" href="css/style4.css" />
<link rel="stylesheet" href="css/image.css" />
<link rel="stylesheet" type="text/css" href="css/book.css" />
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script src="js/jquery-1.12.3.js"></script>
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
