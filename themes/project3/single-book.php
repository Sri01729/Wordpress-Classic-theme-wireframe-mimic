<?php
/*
/* template name: single-book
*/
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="single-book-headings">
    <h1><?php the_field('book_title'); ?></h1>
    <h2><?php the_field('book_subtitle'); ?></h2>
</div>
<div class="book-details">
    <div>
        <p><strong>Author:</strong> <?php the_field('book_author'); ?></p>
        <p><strong>Publisher:</strong> <?php the_field('book_publisher'); ?>,
            <?php the_field('book_publication_year'); ?>
        </p>
        <p><strong>Pages:</strong> <?php the_field('book_page_count'); ?></p>
        <p><strong>ISBN:</strong> <?php the_field('book_isbn'); ?></p>
        <p><strong>Cover Type:</strong> <?php the_field('book_cover_type'); ?></p>
        <p><strong>Price:</strong> <?php the_field('book_price'); ?> <?php if(get_field('book_sale_price')): ?> (Sale
            Price:
            <?php the_field('book_sale_price'); ?>) <?php endif; ?></p>
        <div> <?php the_field('book_description'); ?></div>
        <blockquote><?php the_field('book_authors_note'); ?></blockquote>
        <br /><br />
        <br /><br />
        <p><strong>To order:</strong>
        <p><?php the_field('book_to_order'); ?></p>
        <img src="<?php the_field('book_image'); ?>" alt="">
        <br /><br />
        <br /><br />
        <p><strong>What people are saying:</strong>
        <p><?php the_field('book_what_people_are_saying'); ?></p>
        <img src="<?php the_field('book_image'); ?>" alt="">
    </div>

    <div class=".book-details-img">
        <img src="<?php the_field('book_image'); ?>" alt="">
    </div>
</div>


<?php endwhile; ?>

<?php get_footer(); ?>