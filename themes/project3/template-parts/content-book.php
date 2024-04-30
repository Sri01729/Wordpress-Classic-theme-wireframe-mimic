<div class="book">


    <div class="book-image">


        <div>
            <?php
        $image_url = get_field('book_image');
        if ($image_url) {
        echo '<img src="' . esc_url($image_url) . '" alt="ACF Field Image">';
        }
         ?>
        </div>
        <div class="book-cost">
            <h5><?php the_field('book_cost'); ?></h5>
        </div>
    </div>

    <div>
        <h3><?php the_field('book_heading'); ?></h3>
        <h2><?php the_field('book_date'); ?></h2>
        <p><?php the_field('book_content'); ?></p>
        <br />

        <p><?php the_field('book_link'); ?></p>
        <br /><br />
        <button id="subscribe">Subscribe Now</button>
    </div>

</div>