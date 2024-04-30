<!-- template name: single -->

<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Post Title -->
    <div class="single_post">
        <h2 class="title"><?php the_title(); ?></h2>
        <hr>
        <h3><?php the_excerpt(); ?></h3>
        <hr>
        <h6 class="author"><?php the_field('article_author'); ?></h6>
        <!-- Publish Date -->
        <p class="date"><?php echo get_the_date(); ?></p>

        <!-- Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
        <figure>
            <?php the_post_thumbnail(); ?>
            <figcaption>
                <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
            </figcaption>
        </figure>
        <?php endif; ?>

        <div class="content">
            <?php the_content(); ?>
        </div>

    </div>

</article>
<?php
endwhile;
?>


<?php get_footer(); ?>