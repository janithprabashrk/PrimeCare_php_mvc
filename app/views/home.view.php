<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A sample webpage with a navigation bar and main content.">
    <title>PrimeCare</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css"> <!-- Link to your CSS file -->
    <link rel="icon" href="<?= ROOT ?>/assets/images/p.png" type="image">
</head>

<body>
    <?php require 'components/header.php'; ?> <!-- Include the header component   -->

    <main class="main-content">
        <section class="section section--hero" id="hero" style="background-image: url('<?= ROOT ?>/assets/images/hero.jpg');">
            <h1 class="section__title">Welcome to Our Website</h1>
            <p class="section__description">Your journey to success begins here.</p>
        </section>

        <section class="section section--aboutus" id="aboutus">
            <h2 class="section__title">About Us</h2>
            <p class="section__description">We are a company dedicated to providing exceptional services and solutions.</p>
        </section>

        <section class="section section--service" id="service">
            <h2 class="section__title">Our Services</h2>
            <ul class="service-list">
                <li class="service-list__item">Service 1</li>
                <li class="service-list__item">Service 2</li>
                <li class="service-list__item">Service 3</li>
            </ul>
        </section>

        <section class="section section--ourteam" id="ourteam">
            <h2 class="section__title">Meet Our Team</h2>
            <div class="team-member">
                <h3 class="team-member__name">Team Member 1</h3>
                <p class="team-member__description">Role and description of team member 1.</p>
            </div>
            <div class="team-member">
                <h3 class="team-member__name">Team Member 2</h3>
                <p class="team-member__description">Role and description of team member 2.</p>
            </div>
        </section>

        <section class="section section--reviews" id="reviews">
            <h2 class="section__title">What Our Clients Say</h2>
            <blockquote class="review">
                <p class="review__text">"Exceptional service and great experience!"</p>
                <cite class="review__author">- Client Name</cite>
            </blockquote>
        </section>

        <section class="section section--contact" id="contact">
            <h2 class="section__title">Contact Us</h2>
            <form class="contact-form" action="submit-form.php" method="post">
                <label class="contact-form__label" for="name">Name:</label>
                <input class="contact-form__input" type="text" id="name" name="name" required>

                <label class="contact-form__label" for="email">Email:</label>
                <input class="contact-form__input" type="email" id="email" name="email" required>

                <label class="contact-form__label" for="message">Message:</label>
                <textarea class="contact-form__textarea" id="message" name="message" rows="4
