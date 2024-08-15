<?php
include_once(__DIR__ . './incs/head.php');
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
                <h2>Sign up</h2>
                <form action="">
                    <label for="fullname" class="sub-text">Fullname</label>
                    <input type="text">
                    <label for="email" class="sub-text">Email</label>
                    <input type="text">
                    <div></div>
                    <label for="Password" class="sub-text">password</label>
                    <input type="password" name="password" id="">
                    <label for="Password" class="sub-text">password</label>
                    <input type="password" name="password" id="">
                </form>
            </div>
            <div class="down flex flex-col justify-center items-center"> 
                <p>Have an account?<a href="login.php">login</a></p>
                <login class="cta"><a href="#">Register</a></login>
            </div>
        </div>
    </div>
</section>



<?php
include_once(__DIR__ . './incs/script.php');
?>