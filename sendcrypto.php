<?php
include_once(__DIR__ . './incs/head.php');
?>



<section class="sendcrypto flex flex-col justify-center w-100 items-center">
    <div class="container">
        <div class="inner-container flex">
            <div class="top">
                <div>
                    <div>
                        <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>
                        <h2>Send BTC</h2>
                    </div>
                    <hr>
                    <form action="">
                        <label for="address">token address</label>
                        <input type="text" placeholder="Enter Token Address"> <label for="amount">Token Amount</label>
                        <input type="text" placeholder="Enter Amount">
                    </form>
                </div>

            </div>
            <div class="bottom">
                <div class="next-cta">
                    next
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once(__DIR__ . './incs/script.php');
?>