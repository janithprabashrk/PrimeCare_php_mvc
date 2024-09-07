<link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css"> <!-- Link to your CSS file -->
<header class="header">
        <nav class="header__navbar"> <!-- Change from "navbar" to "header__navbar" for BEM consistency -->
            <img class="header__logo" src="<?= ROOT ?>/assets/images/logo.png" alt="Company Logo"> <!-- Updated to header__logo -->
            <ul class="header__menu"> <!-- Updated to header__menu -->
                <li class="header__menu-item"><a class="header__link" href="#hero">Home</a></li>
                <li class="header__menu-item"><a class="header__link" href="#aboutus">About Us</a></li>
                <li class="header__menu-item"><a class="header__link" href="#service">Services</a></li>
                <li class="header__menu-item"><a class="header__link" href="#ourteam">Our Team</a></li>
                <li class="header__menu-item"><a class="header__link" href="#reviews">Reviews</a></li>
                <li class="header__menu-item"><a class="header__link" href="#contact">Contact</a></li>
            </ul>
            <button class="header__button">SignIn | LogIn</button> <!-- Updated to header__button -->
        </nav>
    </header>