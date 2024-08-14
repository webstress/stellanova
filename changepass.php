<?php
include_once(__DIR__ . './incs/head.php');
?>



<section class="sendcrypto flex flex-col justify-center w-100 items-center">
    <div class="container containera">
        <div class="inner-container inner-containera flex flex-col">
            <div class="top">
                <div>
                    <div>
                        <h2>change password</h2>
                    </div>
                    <hr>
                    <form action="" class="flex flex-col">
                        <label for="address">Old Password</label>
                        <input type="text"> 
                        <hr>
                        <label for="address">new Password</label>
                        <input type="text"> 
                        <label for="address">confirm Password</label>
                        <input type="text"> 

                    </form>
                </div>

            </div>
            <div class="bottom flex w-100">
                <div class="next-cta">
                    Save
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once(__DIR__ . './incs/script.php');
?>