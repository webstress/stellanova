<?php
include_once('./incs/mb-header.php');
// echo 'Welcome to the home page!';
?>



<section class="login flex flex-col justify-center items-center">
    <div class="container flex flex-col justify-center items-center">
        <div class="backarrow">
            <a href="index.php"><i class="fa-solid fa-arrow-left fa-2x" style="color: #10375c;"></i></a>
        </div>
        <div class="inner-container flex flex-col justify-center items-center">
            <div class="up flex flex-col justify-center ">
                <div class="logo flex  justify-center items-center">
                        <img src=" assets\images\Blue Minimalist Investment Company Logo 1@2x.png"></img>
                    <img src="" alt="">
                </div>
                <h2>Login</h2>
                <h2 class="sub-text">Login to invest safely with StellarNova
                and earn commision daily.</h2>
                <form action="">
                    <label for="email" class="sub-text">Email</label>
                    <input type="text">
                    <div></div>
                    <label for="Password" class="sub-text">password</label>
                    <input type="password" name="password" id="">
                    <h3>Forgot Password</h3>
                </form>
            </div>
            <div class="down flex flex-col justify-center items-center"> 
                <p>don't have an account <a href="register.php">Register</a></p>
                <login class="cta"><a href="#">login</a></login>
            </div>
        </div>
    </div>
</section>



<?php
include_once('./incs/mb-footer.php');
?>