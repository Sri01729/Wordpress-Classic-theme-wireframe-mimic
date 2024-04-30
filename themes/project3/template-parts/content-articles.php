<h2>Articles & News</h2>
<div class="article_news_box">
    <?php
    $args = array(
        'post_type' => 'post', // Change 'post' to your custom post type if needed.
        'posts_per_page' => -1 // Fetches all posts
    );

    $query = new WP_Query($args);
    $post_count = 0;

    if ($query->have_posts()) :
        echo '<div class="auto-grid">';
        while ($query->have_posts()) : $query->the_post();
            $post_count++;
                ?>
    <div class="article">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <hr>
        <div class="details">
            <h5 class="author"><?php the_field('article_author'); ?></h5>
            <p class="date"><?php echo get_the_date(); ?></p>
        </div>
    </div>
    <?php

        endwhile;
        echo '</div>'; // Close .auto-grid
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;
    ?>
</div>