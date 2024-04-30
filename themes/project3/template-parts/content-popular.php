<h2>Most Popular Articles</h2>
<div class="popular_articles_box">
    <?php
    // Replace 'your-tag-slug' with the actual slug of the tag you want to filter by.
    $args = array(
        'post_type' => 'post', // Change 'post' to your custom post type if needed.
        'posts_per_page' => 8, // Fetches the first 8 posts. Corrected the comment to match the code.
        'tag' => 'popular', // Filter posts by tag slug
    );

    $query = new WP_Query($args);
    $post_count = 0;

    if ($query->have_posts()) :
        echo '<div class="auto-grid">';
        while ($query->have_posts()) : $query->the_post();
            $post_count++;
                ?>
    <div class="popular_article">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <hr>
        <div class="details">
            <h5 class="author"><?php the_field('article_author'); ?></h5>
            <!-- Assuming you're using ACF or similar for custom fields -->
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