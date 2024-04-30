<!-- Template Name: archive -->
<?php get_header(); ?>
<section class="article-articles">
    <div class="content">
        <h1>Articles</h1>
        <p>Content comes here</p>


        <?php get_template_part( 'template-parts/content', 'article-archive' );?>


        <?php
// Pagination for a list of posts on archive pages.
the_posts_pagination(
    array(
        'mid_size'  => 2,
        'prev_text' => esc_html__( 'Prev', 'textdomain' ),
        'next_text' => esc_html__( 'Next', 'textdomain' ),
    )
);
?>

    </div>
</section>

<?php get_footer(); ?>