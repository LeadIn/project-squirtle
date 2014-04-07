<?php
/*
Template Name: Analytics Page
*/
?>

<?php get_header("page"); ?>

    <div class="content" class="subscribe">

        <div class="content-inner">

           <section class="page-header">

                <div class="text-column">
                    <h1>Content Analytics plugin for WordPress</h1>
                    <p>What's the best converting content on your website? How about the best converting source of traffic? If you're using Google Analytics for WordPress, you likely have to spend hours setting up custom reports to get this data. With our free WordPress plugin LeadIn, this type of tracking is easy. Just simple, actionable content analytics with no complicated set up.</p>
                    <a href="/download" class="cta-button large download-button">Get the free WordPress plugin</a>
                    <p class="secondary-cta">Start tracking leads in 5 minutes<br><a href="/features">How does it work?</a></p>
                </div>

                <div class="image-column">
                    <a class="screenshot" href="<?php echo get_template_directory_uri(); ?>/library/images/analytics-preview.png" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/analytics-preview.png" alt="LeadIn content analytics"></a>
                </div>

            </section>

            <?php include_once(untrailingslashit(dirname( __FILE__ )) . '/section-testimonial.php'); ?>

        </div>

    </div>

<?php get_footer("page"); ?>
