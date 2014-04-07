<?php get_header('base'); ?>

    <div class="content">

        <div class="content-inner">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <section id="post post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
                    
                    <section class="sidebar">
                        <a class="blog-logo" href="/" alt="WordPress Marketing Software"><img height="auto" width="170px" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/Leadin_logo@2x.png"></a>
                        <p>LeadIn makes <a href="/" alt="WordPress Marketing Software">WordPress marketing software</a>.</p>
                        <p>
                            <a href="https://twitter.com/leadinapp" class="twitter-follow-button" data-show-count="false">Follow @leadinapp</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </p>
                        <div class="sidebar-share-buttons">
                            <p>Share this post</p>
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                            <a class="addthis_button_facebook"></a>
                            <a class="addthis_button_twitter"></a>
                            <a class="addthis_button_google_plusone_share"></a>
                            <a class="addthis_button_linkedin"></a>
                            <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d87197200712ee"></script>
                            <!-- AddThis Button END -->
                        </div>
                    </section>


                    <article class="article" itemprop="articleBody">

                        <section class="article-content">
                            
                            <h1 class="article-title" itemprop="headline"><?php the_title(); ?></h1>
                            
                            <p class="byline">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                    <span class="author"><?php echo get_avatar( get_the_author_meta( 'ID' ), 25 ); ?> <?php echo get_the_author_link(); ?></span>
                                </a>
                            </p>  
                            <?php the_content(); ?>

                        </section>

                        <footer class="article-footer">

                            <div class="blog-post-bottom-cta">

                                <div class="blog-post-bottom-cta-inner">
                                    <?php if ( in_category( 'journey', $post->ID ) ) : ?>
                                        <h2>Follow Our Journey to 100,000 Downloads</h2>
                                        <p> <?php echo category_description( get_category_by_slug('journey')->term_id ); ?></p>
                                        <script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
                                        <script>
                                            jQuery( document ).ready(function() {
                                                var $redirectURL = jQuery(location).attr('href');
                                                console.log( $redirectURL+'?emailSubscribed=true' );
                                            });
                                            hbspt.forms.create({ 
                                                portalId: '324680',
                                                formId: 'd0f1e318-cf4d-47d7-bd5d-2cce2240a1b8',
                                                redirectUrl: 'http://leadin.com/blog?newSubscriber=true',
                                                css: ' ',
                                                submitButtonClass: 'button'
                                            });
                                        </script>
                                    <?php else : ?>
                                        <h2>Get insights into the world of WordPress</h2>
                                        <p> <?php echo category_description( get_category_by_slug('wordpress')->term_id ); ?></p>
                                        <script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
                                        <script>
                                            jQuery( document ).ready(function() {
                                                var $redirectURL = jQuery(location).attr('href');
                                                console.log( $redirectURL+'?emailSubscribed=true' );
                                            });
                                            hbspt.forms.create({ 
                                                portalId: '324680',
                                                formId: 'a06f5dc5-9a33-49e2-b9a6-35a9db1199d4',
                                                redirectUrl: 'http://leadin.com/blog?topic=wordpress&newSubscriber=true',
                                                css: ' ',
                                                submitButtonClass: 'button'
                                            });
                                        </script>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <section class="article-comments">
                                <div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                    var disqus_shortname = 'leadin'; // required: replace example with your forum shortname

                                    /* * * DON'T EDIT BELOW THIS LINE * * */
                                    (function() {
                                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                                
                            </section>

                        </footer>

                    </article>

                </section>

            <?php endwhile; ?>

            <?php else : ?>

                <article id="post-not-found" class="hentry">
                    <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>

                    <section class="article-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    
                    <footer class="article-footer">
                            <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                    </footer>
                </article>

            <?php endif; ?>

        </div>

    </div>

<?php get_footer("plain"); ?>
