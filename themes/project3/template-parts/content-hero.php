<div class="articles_box">
    <?php
    $args = array(
        'post_type' => 'post', // Change 'post' to your custom post type if needed.
        'posts_per_page' => 5 // Fetches the first 5 posts
    );

    $query = new WP_Query($args);
    $post_count = 0;

    if ($query->have_posts()) :
        echo '<div class="auto-grid">';
        while ($query->have_posts()) : $query->the_post();
            $post_count++;
            if ($post_count == 1) {
                // Layout for the first item with image on the left and content on the right
                ?>
    <div class="full-width-item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <hr>
            <p><?php the_excerpt(); ?></p>
            <hr>
            <div class="details">
                <span class="author"><?php the_field('article_author'); ?></span>
                <p class="date"><?php echo get_the_date(); ?></p>
            </div>
        </div>
    </div>
    <?php
            } else {
                // Layout for remaining items
                ?>
    <div class="grid-item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <hr>
        <p><?php the_excerpt(); ?></p>
        <hr>
        <div class="details">
            <span class="author"><?php the_field('article_author'); ?></span>
            <p class="date"><?php echo get_the_date(); ?></p>
        </div>
    </div>
    <?php
            }
        endwhile;
        echo '</div>'; // Close .auto-grid
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;
    ?>
</div>