    <footer class="footer">

        <div class="footer-inner">

            <section class="page-section page-section-contact">
                <h2 class="page-section-header">Any questions?</h2>
                <script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
                <script>
                  hbspt.forms.create({ 
                    portalId: '324680',
                    formId: 'bff96a5f-115c-43b5-935e-97ccfaded47e',
                    css: '',
                    submitButtonClass: 'button'
                  });
                </script>
            </section>

            <section class="page-section page-section-bottom-cta">
                <a href="/download" class="cta-button large download-button">Get the free WordPress plugin</a>
                <p class="secondary-cta">Start tracking leads in 5 minutes<br><a href="/features">How does it work?</a></p>
            </section>

        </div>

    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/library/js/hubspot-leadin.js"></script>

    <?php include_once(untrailingslashit(dirname( __FILE__ )) . '/mixpanel.php'); ?>
    <?php include_once(untrailingslashit(dirname( __FILE__ )) . '/snapengage.php'); ?>

    <?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>

</body>

</html>
