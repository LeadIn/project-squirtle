<?php
/*
Template Name: Features Page
*/
?>

<?php get_header('page'); ?>

    <div class="content">

        <div class="content-inner">

            <section class="page-header page-section-how">

                <h1 class="page-title">How Does LeadIn Work?</h1>

                <div class="step">
                    <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/library/images/home/subscribe-step-1@2x.png" alt="LeadIn anonymous visitor analytics">
                    <p class="step-description">1. When you activate the WordPress plugin, LeadIn will track each anonymous visitor to your site with a cookie. If someone closes the pop-up or subscribes, we won't show them the pop-up again.</p>
                </div>

                <div class="step">
                    <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/library/images/home/subscribe-step-2@2x.png" alt="LeadIn identified visitor analytics">
                    <p class="step-description">2. Once someone fills out the subscribe form or any other other form on your site, LeadIn will identify that person with their email address.</p>
                </div>

                <div class="step">
                    <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/library/images/LeadIn_coming-soon-demo@2x.png" alt="LeadIn form submission email" style="max-height: 422px;">
                    <p class="step-description">3. You'll receive an email with a link to the new contact record with all of their visit history.</p>
                </div>

            </section>

            <section class="page-section page-section-powerups">

                <h2 class="page-section-header">Extend LeadIn with Power-ups</h2>

                <div class="powerup">
                    <a href="/pop-subscribe-form-plugin-wordpress/"><img class="screenshot" src="<?php echo get_template_directory_uri(); ?>/library/images/subscribe-example.png" alt="LeadIn subscribe form pop-up"></a>
                    <h4 class="powerup-title"><a href="/pop-subscribe-form-plugin-wordpress/">Subscribe Pop-up</a></h4>
                    <p class="powerup-description">If you're not actively trying to grow your email list, you're missing out on a huge opportunity to reach your audience.</p>
                </div>

                <div class="powerup">
                    <a class="screenshot" href="/content-analytics-plugin-wordpress/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/analytics-preview.png" alt="LeadIn content analytics"></a>
                    <h4 class="powerup-title"><a href="/content-analytics-plugin-wordpress/">Content Analytics</a></h4>
                    <p class="powerup-description">What's the best converting content on your website? How about the best converting source of traffic?</p>
                </div>

            </section>

        </div>

    </div>

<?php get_footer("page"); ?>
