<?php
/*
Template Name: Home Page
*/
?>

<?php get_header('page'); ?>

    <div class="content">

        <div class="content-inner">

            <section class="page-header">

                <div class="text-column">
                    <h1>Get personal with your leads</h1>
                    <p>When a person submits a form on your WordPress site, you want to know more about them. What pages they've visited, when they return, and what social networks they’re on. Our WordPress marketing automation and lead tracking plugin gives you the details you need to make your next move. Because business isn’t business unless it’s personal.</p>
                    <a href="/download" class="cta-button large download-button">Get the free WordPress plugin</a>
                    <p class="secondary-cta">Start tracking leads in 5 minutes<br><a href="/features">How does it work?</a></p>
                </div>

                <div class="image-column">
                    <img class="screenshot" src="<?php echo get_template_directory_uri(); ?>/library/images/LeadIn_coming-soon-demo@2x.png" alt="LeadIn CRM contact timeline">
                </div>

            </section>

            <?php include_once(untrailingslashit(dirname( __FILE__ )) . '/section-testimonial.php'); ?>

        </div>

    </div>

<?php get_footer("page"); ?>
