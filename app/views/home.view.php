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
        <section class="section--hero" id="hero" >
            <div class="section--hero_bg" style="background-image: url('<?= ROOT ?>/assets/images/hero.png');">
                <div class="hero__text">
                    <p class="">Maximize your rental income with our expert property management services. Let PrimeCare handle everything from tenant satisfaction to maintenance, ensuring peace of mind for property owners...</p>
                    <!-- <p class="section__description">Your journey to success begins here.</p> -->
                </div>
                <button class="hero__button">
                    Continue 
                    <img class="hero__button__img" src="<?= ROOT ?>/assets/images/next1.png" alt="next">
                </button>
            </div>
        </section>

        <section class="" id="aboutus">
            <div class="section--aboutus">
                <div class="section__title">About Us</div>
                <div class="aboutus">                
                    <div class="aboutus__left">
                        <p class="aboutus__description">PrimeCare began as a small property management service and now connects property owners with renters across 35+ cities. We simplify property renting by offering complete management, rental, and maintenance solutions, ensuring a secure and profitable experience for owners while delivering a smooth process for tenants.
                            <br><br>At PrimeCare, we focus on building trust and transparency between owners and renters. Discover how we can help you get the most out of your property.
                        </p>
                        <h3>
                            Team<br>
                            PrimeCare
                        </h3>
                    </div>
                    <div class="aboutus__right">
                        <!-- <div class="circle"></div> -->
                        <img class="aboutus__img" src="<?= ROOT ?>/assets/images/hero.png" alt="aboutus">
                    </div>
                </div>
            </div>
        </section>

        <section class="" id="service">
            <div class="section--service">
                <h2 class="section__title">Our Services</h2>
                <ul class="service-list">
                    <li class="card__item">
                        <img class="card__img" src="<?= ROOT ?>/assets/images/property.png" alt="">
                        <h3 class="card__title">Property management</h3>
                        <!-- <p class="card__description">Description of service 1.</p> -->
                    </li>
                    <li class="card__item">
                        <img class="card__img" src="<?= ROOT ?>/assets/images/renting.png" alt="">
                        <h3 class="card__title">Renting Services</h3>
                        <!-- <p class="card__description">Description of service 1.</p> -->
                    </li>
                    <li class="card__item">
                        <img class="card__img" src="<?= ROOT ?>/assets/images/tenant.png" alt="">
                        <h3 class="card__title">Tenant Management</h3>
                        <!-- <p class="card__description">Description of service 1.</p> -->
                    </li>
                </ul>
            </div>
        </section>

        <section class="section--ourteam" id="ourteam">
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

        <section class="section--reviews" id="reviews">
            <h2 class="section__title">What Our Clients Say</h2>
            <blockquote class="review">
                <p class="review__text">"Exceptional service and great experience!"</p>
                <cite class="review__author">- Client Name</cite>
            </blockquote>
        </section>

        <section class="section--contact" id="contact">
            <h2 class="section__title">Contact Us</h2>
            <form class="contact-form" action="submit-form.php" method="post">
                <label class="contact-form__label" for="name">Name:</label>
                <input class="contact-form__input" type="text" id="name" name="name" required>

                <label class="contact-form__label" for="email">Email:</label>
                <input class="contact-form__input" type="email" id="email" name="email" required>

                <label class="contact-form__label" for="message">Message:</label>
                <textarea class="contact-form__textarea" id="message" name="message" rows="4"></textarea>
            </form>
        </section>
    </main>
</body>
</html>
