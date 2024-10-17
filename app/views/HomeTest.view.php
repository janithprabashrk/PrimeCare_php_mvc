<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/HomeTest.css">
    <link rel="icon" href="<?= ROOT ?>/assets/images/p.png" type="image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <title>PrimeCare</title>
</head>

<body>

    <!-- Header Section -->
    <section class="header">
        <nav>
            <a href=""><img src="<?= ROOT ?>/assets/images/logo.png" /></a>
            <div class="nav-links" id="navlinks">
                <img src="<?= ROOT ?>/assets/images/close.png" class="close-icon" alt="" onclick="hideMenu()">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="">Logs</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <button class="header__button" onClick="window.location.href = 'login'">
                    Sign In | Log In
                </button>
            </div>
            <img src="<?= ROOT ?>/assets/images/menu.png" class="menu-icon" onclick="showMenu()" />
        </nav>
        <div class="text-box">
            <h1>Welcome to PrimeCare</h1>
            <p>Manage your properties effortlessly , offering seamless Management, Maintenance, and Rental services</br>All in one platform.</p>
            <!-- <a href="<?= ROOT ?>/login" class="hero-btn">Get Started</a> -->
            <button class="hero-btn" onclick="window.location.href='dashboard'">
                Get Started
            </button>
        </div>
    </section>


    <!-- Features Section -->
    <section class="services">
        <h1>Our Services</h1>
        <p>PrimeCare offers a range of services designed to meet all your property needs.</p>

        <div class="row">
            <div class="service-col">
                <h3>Property Management</h3>
                <p>List your property for rent and manage bookings effortlessly.</p>
            </div>
            <div class="service-col">
                <h3>Property Care</h3>
                <p>From cleaning to maintenance, we offer services to keep your property in top condition, even while you’re away.</p>
            </div>
            <div class="service-col">
                <h3>Rental Services</h3>
                <p>Rent out your property to verified tenants and track inquiries with ease.</p>
            </div>
        </div>
    </section>


    <section class="features">
        <div class="column">

        </div>
    </section>


    <!-- About Us Section -->
    <section class="aboutus"> 

    </section>






    <script>
        var navlinks = document.getElementById("navlinks");

        function showMenu() {
            navlinks.style.right = "0";
        }

        function hideMenu() {
            navlinks.style.right = "-200px";
        }
    </script>
</body>

</html>