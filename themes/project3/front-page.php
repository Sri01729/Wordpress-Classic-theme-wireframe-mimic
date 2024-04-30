<!-- Template Name: front-page -->
<?php get_header(); ?>


<!-- Displays the current post title -->
<div class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <?php get_template_part( 'template-parts/content', 'hero' );?>

    <?php get_template_part( 'template-parts/content', 'book' );?>

    <?php get_template_part( 'template-parts/content', 'articles' );?>

    <?php get_template_part( 'template-parts/content', 'popular' );?>

    <?php get_template_part( 'template-parts/content', 'form' );?>


    <?php endwhile;
    endif; ?>


</div>

<script src="" async defer></script>

<?php get_footer(); ?>