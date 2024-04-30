<?php wp_footer(); ?>
<footer>
    <div class="footer_img">
        <?php $header = get_field('header'); ?>
        <span>
            <img src="<?php  the_field('header'); ?>" alt="">

        </span>
    </div>
    <div class="footer_content">
        <div>
            <p>Western Canada’s award-winning environmental news magazine.
                The Watershed Sentinel has been the voice of the grassroots environmental movement in BC (and
                beyond) for over 25 years. When environmental community groups and thinkers –the folks who are
                working on-the-ground on issues such as water, oil and gas projects, climate change, GMOs, fish
                farming, Indigenous rights, conservation efforts, etc. – want to have their story heard, they
                contact us. In a world where our access to news is increasingly corporate-and-algorithm-controlled,
                we aim to amplify the stories that don't get heard elsewhere, and to provide a forum for intelligent
                discussion about environmental issues and their broader social implications.</p>
        </div>
        <div class="footer_links">
            <ul>
                <li>Subscribe</li>
                <li>About</li>
                <li>Donate</li>
                <li>Contact</li>
                <li>RSS Feed</li>
                <li>Privacy policy</li>
            </ul>
            <ul class="footer_icons">
                <li><a href="https://twitter.com/yourusername" target="_blank" class="twitter-icon">
                        <i class="fab fa-facebook"></i>
                    </a></li>
                <li><a href="https://twitter.com/yourusername" target="_blank" class="twitter-icon">
                        <i class="fab fa-twitter"></i>
                    </a></li>
                <li><a href="https://twitter.com/yourusername" target="_blank" class="twitter-icon">
                        <i class="fa-solid fa-square"></i>
                    </a></li>
            </ul>
            <input type="text" placeholder="Search..">
        </div>

    </div>

</footer>
</body>

</html>