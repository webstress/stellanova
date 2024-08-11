<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellanova</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- font awsome-->


<!--custom styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 header-container">
            <div class="flex items-center justify-between h-16">
                <!-- Logo Section -->
                <div class="flex-shrink-0 logo">
                    <a href="#" class="ml-[-10px] text-xl font-bold text-gray-800">
                        <img src=" assets\images\Blue Minimalist Investment Company Logo 1@2x.png"></img>
                    </a>
                </div>

                <!-- Links Section -->
                <div class="hidden md:flex md:space-x-8 nav-links">
                    <a href="home.php" class="text-gray-700 hover:text-blue-600" style='font-size: 20px;'>Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-600" style='font-size: 20px;'>About</a>
                    <a href="investment.php" class="text-gray-700 hover:text-blue-600" style='font-size: 20px;'>Investment</a>
                    <a href="testimonial.php" class="text-gray-700 hover:text-blue-600" style='font-size: 20px;'>Testimonial</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600" style='font-size: 20px;'>Contact</a>
                </div>

                <!-- Button Section -->
                <div class="hidden md:flex md:space-x-4">
                    <a href="sign-in.php" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Sign In</a>
                    <a href="register.php" class="register">Register</a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-button" class="text-gray-700 focus:outline-none focus:text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="fixed top-0 right-0 w-64 h-full bg-white bg-opacity-90 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col mt-16 space-y-1 p-4 z-50">
                    <a href="home.php" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-600">About</a>
                    <a href="investment.php" class="text-gray-700 hover:text-blue-600">Investment</a>
                    <a href="testimonial.php" class="text-gray-700 hover:text-blue-600">Testimonial</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600">Contact</a>
                    <a href="sign-in.php" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Sign In</a>
                    <a href="register.php" class="register">Register</a>
                </div>

            </div>
    </nav>

    <body>
