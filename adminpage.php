<?php
include_once(__DIR__ . './incs/head.php');
?>



<section class=" admin-page sendcrypto flex flex-col justify-center w-100 items-center">
    <div class="container containera">
        <div class="inner-container inner-containera flex flex-col">
            <div class="top">
                <div>
                    <div class="flex items-center justify-center">
                    <img src=" assets\images\Blue Minimalist Investment Company Logo 1@2x.png"></img>
                    </div>
                    <hr>
                    <h2 class="h2-head">Admin Page</h2>
                    <form action="" class="flex flex-col">
                        <label for="email">email address</label>
                        <input type="text" > 
                    </form>
                    <form action="" class="bt flex justify-between items-center">
                        <div class="flex flex-col">
                            <label for="funding">funding amount</label>
                            <input type="text">
                        </div>
                        <select name="crypto" id="crypto">
                            <option value="BTC">BTC</option>
                        </select>

                    </form>
                </div>

            </div>
            <div class="bottom flex w-100">
                <div class="next-cta">
                    Check Database
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once(__DIR__ . './incs/script.php');
?>