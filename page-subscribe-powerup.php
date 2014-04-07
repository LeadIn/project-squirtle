<?php
/*
Template Name: Subscribe Page
*/
?>

<?php get_header("page"); ?>

    <div class="content" class="home subscribe">

        <div class="content-inner">
            
            <section class="page-header">

                <div class="text-column">
                    <h1>WordPress Subscribe Widget</h1>
                    <p>If you're not actively trying to grow your email list, you're missing out on a huge opportunity to reach your audience. Stop letting potential subscribers slip through the cracks. Convert more visitors to subscribers with the LeadIn pop-up subscribe form plugin.</p>
                    <a href="/download" class="cta-button large download-button">Get the free WordPress plugin</a>
                    <p class="secondary-cta">Start tracking leads in 5 minutes<br><a href="/features">How does it work?</a></p>
                </div>

                <div class="image-column">
                    <a href="http://davidcancel.com" target="_blank"><img class="screenshot" src="<?php echo get_template_directory_uri(); ?>/library/images/subscribe-example.png" alt="LeadIn subscribe form pop-up"></a>
                </div>

            </section>

            <?php include_once(untrailingslashit(dirname( __FILE__ )) . '/section-testimonial.php'); ?>

        </div>

    </div>

<?php get_footer("page"); ?>
