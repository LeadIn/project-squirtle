<?php
/*
Template Name: Blog
*/

$categories =   array( 
                    array(
                        slug => "journey",
                        title => "Follow our Journey to 100,000 Downloads",
                        formId => "d0f1e318-cf4d-47d7-bd5d-2cce2240a1b8",
                        formRedirectLink => "/blog/?newSubscriber=true"
                    ),
                    array(
                        slug => "wordpress",
                        title => "Get insights into the world of WordPress",
                        formId => "a06f5dc5-9a33-49e2-b9a6-35a9db1199d4",
                        formRedirectLink => "/blog/?topic=wordpress&newSubscriber=true"
                    )
                );

$currentTopic = $_GET['topic'];

if ($currentTopic == "wordpress") {
    $currentCategory = $categories[1];
} 
else {
    $currentCategory = $categories[0];
}

$catObj = get_category_by_slug($currentCategory['slug']); 

$currentCategory['description'] = $catObj->description

?>

<?php get_header("page"); ?>

<nav class="topic-nav">
    <div class="topic-nav__inner">
        <span class="topic-nav__label">Blog topics:</span>
        <a class="topic-nav__topic<?php echo ($currentTopic != 'wordpress' ? ' topic-nav__topic--current' : ''); ?>" href="/blog">Journey to 100,000 installs</a>
        <a class="topic-nav__topic<?php echo ($currentTopic == 'wordpress' ? ' topic-nav__topic--current' : ''); ?>" href="/blog?topic=wordpress">WordPress Tips and Tricks</a>
    </div>
</nav>

<div class="blog-topic-header">
    <div class="blog-topic-header__inner">
        <h1 class="blog-topic-header__title"><?php echo $currentCategory['title']; ?></h1>
        <p class="blog-topic-header__description"><?php echo $currentCategory['description']; ?></p>
        <div class="blog-topic-header__form">
            <script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
            <script>
                jQuery( document ).ready(function() {
                    var $redirectURL = jQuery(location).attr('href');
                    console.log( $redirectURL+'?emailSubscribed=true' );
                });
                hbspt.forms.create({ 
                    portalId: '324680',
                    formId: '<?php echo $currentCategory["formId"]; ?>',
                    redirectUrl: '<?php echo $currentCategory["formRedirectLink"]; ?>',
                    css: ' ',
                    submitButtonClass: 'button'
                });
            </script>
        </div>
    </div>
</div>

<div class="content">

    <div class="content-inner">

        <div class="blog-post-list">
            <?php

            $args = array( 'category_name' => $currentCategory['slug'] );

            $myposts = get_posts( $args );

            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <article class="blog-article">
                <a href="<?php the_permalink(); ?>"><h2 class="blog-article__title"><?php the_title(); ?></h2></a>
                <p class="blog-article__meta">
                    <?php printf( __( 'by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') ); ?>
                </p>
                <?php the_excerpt(); ?>
            </article>
            <?php endforeach; 
            wp_reset_postdata();

            ?>
        </div>

    </div>

</div>

<?php get_footer("plain"); ?>
