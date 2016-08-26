<section>
<a href="index.php">
    <div id="logo"></div>
</a>
<div id="togg" style="cursor:pointer">
    <img src="images/togg.png" />
</div>
<div id="main_nav">
    <a href="index.php">
        <li>Home</li>
    </a>
    <a href="books.php">
        <li>books</li>
    </a>
    <?php
    if(logged_in() === true){
        echo '<a href="changepass.php"><li>change password</li></a>';
        echo '<a href="logout.php"><li>sign out</li></a>';}
        ?>
    <p>&copy;Copyright E-library.All Right Reserved.</p>
</div>
</section>