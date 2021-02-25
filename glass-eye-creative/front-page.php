<?php
/* Front Page Template */
    get_header();
?>
<div class="home">
        <div class="home-hero-section">
            <div class="hero-content">
                <h1>Glass Eye Creative</h1>
                <p>We are a volunteer-run art center offering a variety of free creative classes and events in order to foster the creative community in Oklahoma.</p>
                <button class="button button-home button-purple"><a href="#">View Class Schedule</a></button>
                <button class="button button-home button-pink"><a href="#">Upcoming Events</a></button>
            </div>
        </div>
        <div class="home-philosophy-section">
            <h2>Glass Eye Philosophy</h2>
            <p>Here at Glass Eye, we believe that every person deserves access to freedom and creativity. That’s why we offer free classes to the public, regardless of age, gender, race, social status, income, religion or any other reason.</p>
        </div>
        <div class="home-location-section">
            <h2>Location</h2>
            <p>324 NW 10th St.
                <br> Oklahoma City, OK
                <br> 73101
            </p>
        </div>
        <div class="home-featured-instructors-section">
            <h2>Featured Instructors</h2>
            <div class="featured-instructors-width-wrapper">
                <div class="featured-instructor featured-instructor-pink">
                    <img src="<?php bloginfo('template_url') ?>/images/john-smith-featured-headshot.png" alt="">
                    <h3>John Smith</h3>
                    <p>John has over ten years of industry experience and specializes in watercolors and oil pastels.
                    </p>
                    <button class="button"><a href="">Read More</a></button>
                </div>
                <div class="featured-instructor featured-instructor-teal">
                    <img src="<?php bloginfo('template_url') ?>/images/leslie-yepp-featured-headshot.png" alt="">
                    <h3>Leslie Yepp</h3>
                    <p>Leslie has studied in Paris, China, and Brazil, bringing a wide variety of cultural influences and styles to her classes. She teaches everything from basic drawing to sculpture.
                    </p>
                    <button class="button"><a href="">Read More</a></button>
                </div>
                <div class="featured-instructor featured-instructor-purple">
                    <img src="<?php bloginfo('template_url') ?>/images/lisa-frank-featured-headshot.png" alt="">
                    <h3>Lisa Frank</h3>
                    <p>Lisa comes to us as a visiting artist and instructor. She specializes in brightly colored animal illustration.
                    </p>
                    <button class="button"><a href="">Read More</a></button>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>