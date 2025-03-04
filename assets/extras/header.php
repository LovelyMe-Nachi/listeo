<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listeo</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- javascript -->
    <script src="assets/js/script.js" defer></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/ee0082ad61.js" crossorigin="anonymous"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Allison&family=Bebas+Neue&family=Cedarville+Cursive&family=Dekko&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main class="general-container" id="listeo_top">
        <!-- header -->
        <header>
            <a href="" class="header-logo"><img src="assets/images/logo/logo-1.png" alt=""></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="header-side-options">
                <div class="header-cart">
                    <span class="cart-icon">
                        <span class="cart-count">0</span>
                        <svg class="shopping-cart-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </span>
                    <div class="cart-wrapper">
                        <p>No products found in the cart</p>
                    </div>
                </div>
                <span class="small-screen-sign-in">
                    <svg class="sign-in-icon" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                    <polyline points="10 17 15 12 10 7"></polyline>
                    <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg>
                </span>
                <span class="small-screen-menu"><i class="fa-solid fa-bars"></i></span>
                <a href="login.php" class="header-sign-in">
                    <span><svg class="sign-in-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                    <polyline points="10 17 15 12 10 7"></polyline>
                    <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg></span>sign in
                </a>
            </div>
        </header>

        <!-- small-screen-nav -->
        <div class="small-screen-nav">
            <div class="small-screen-header">
                <a href="index.html" class="small-screen-logo"><img src="assets/images/logo/logo.png" alt=""></a>
                <span class="close-small-screen-nav"><i class="fa-solid fa-xmark"></i></span>
            </div>

            <ul>
                <li><a href="index.php">home <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <li><a href="about.php">about <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <li><a href="pages.php">pages <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <li><a href="contact.php">contact <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <li><a href="service.php">services <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <li><a href="listings.php">listings <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <li><a href="login.php">sign in <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            </ul>

            <div class="small-screen-location">
                <h4>our office</h4>
                <p>12345 wood creeks road.</p>
                <p>Phone: 234 816 145 2508</p>
                <p>Email: <a href="http://" target="_blank" rel="noopener noreferrer">ohakwemuna@gmail.com</a></p>

                <div class="small-screen-icons">
                    <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-messenger"></i></a>
                    <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <!-- small-screen-nav -->