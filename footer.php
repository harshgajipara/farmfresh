 <?php echo do_shortcode("[instagram-feed]"); ?>

 <!-- Sart footer main -->
    <footer class="footer-main">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="footer-mail">
                        <?php echo do_shortcode("[mc4wp_form id='118']"); ?>
                    </div>
                    <div class="footer-content">
                        <p><?php the_field('tag_line','option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="custom-row">
                    <div class="footer-bottom-left">
                        <p> <?php the_field('footer_text','option'); ?></p>
                    </div>
                    <div class="footer-bottom-right">
                        <a href="<?php echo site_url('/home'); ?>">
                            <p>click here to go back to</p>
                            <img src="<?php the_field('footer_logo','option'); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Sart footer main -->

    <?php wp_footer(); ?>

    <!-- Start mavigation script -->
    <script>
        $('.mobile-menu-icon').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('mobile-menu-icon-open');
            $('.my-menu').toggleClass('my-menu-open');
        });
    </script>
    <!-- Start mavigation script -->

</body>

</html>