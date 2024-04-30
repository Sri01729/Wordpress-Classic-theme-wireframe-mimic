<div class="auto-grid">
    <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );
            $posts_query = new WP_Query($args);
            if ($posts_query->have_posts()) :
                while ($posts_query->have_posts()) : $posts_query->the_post();
            ?>
    <div class="grid-item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <hr>
        <span class="author"><?php the_field('article_author'); ?></span>
        <p class="date"><?php echo get_the_date(); ?></p>
    </div>
    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
</div>