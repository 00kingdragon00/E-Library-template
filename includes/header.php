<header>
    <a href="index.php">
        <div id="logo"></div>
    </a>
    <div id="mainnav">
        <ul>
            <li>
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="books.php">books</a>
            </li>
            <?php
                if(logged_in() === true){
                    echo '<li id="hide" style="color:rgba(155,146,135,1); cursor:pointer">Hi,'.$user_data['username'].'!</li>';
                }else{
                    echo '<li><button onclick="window.location.href=\'login.php\'" type="button" class="btn btn-primary btn-sm">sign in</button></li>';
                }
                
            ?>
        </ul>
    </div>
</header>
<div class="show">
    <ul style="padding:0; list-style-type:none">    
        <a href="changepass.php"><li>change Password</li></a>   
        <a href="logout.php"><li>Sign out</li></a>
    </ul>
</div>
