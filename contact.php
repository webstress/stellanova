<?php
include_once(__DIR__ . './incs/head.php');
include_once(__DIR__ . './incs/navbar.php');
?>
<section class="about hero">
    <div class="container">
        <h2>StellarNova</h2>
        <hr>
        <h1>CONTACT US</h1>
    </div>
</section>
<section class="contact flex items-center justify-center">
    <div class="container flex items-center justify-center">
    <form class="contact-form">
        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" >
            </div>
            <div>
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" >
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
        
        </div>
    </form>
    </div>
</section>
<?php
include_once(__DIR__ . './incs/ab-footer.php');
include_once(__DIR__ . './incs/script.php');
?>