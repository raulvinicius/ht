<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/index.php" ) ?>

<?php else : ?>

    <?php get_header(); ?>

        <!-- Add your site or application content here -->
        <p>Hello world! This is HTML5 Boilerplate.</p>

    <?php get_footer(); ?>

<?php endif; ?>