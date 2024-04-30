<div class="form">
    <div class="hiring">
        <?php $form_image = get_field('form-image'); ?>
        <span>
            <img src="<?php  the_field('form_image'); ?>" alt="">

        </span>

        <div class="newsletter">
            <h2>We're Hiring</h2>
            <p>Join our editorial team and help us carry forward our 30-year+ mission of publishing from the
                environmental grassroots!</p>
            <button>Learn More</button>
        </div>
    </div>
    <div>
        <h2>Stay up-to-date with our bi-monthly newsletter</h2>
        <?php echo do_shortcode('[contact-form-7 id="54f88a0" title="Contact form 1"]'); ?>
    </div>
</div>