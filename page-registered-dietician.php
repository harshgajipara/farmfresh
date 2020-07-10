<?php get_header(); ?>

<!--Start MEET OUR 2019 -->
    <section class="registered-dieticians-main">
        <div class="container">

            <?php 
            $dietician = new WP_Query(array(
                'post_type'=>'register_dietician',
                'posts_per_page'=>-1,
            ));

            while($dietician->have_posts()){
                $dietician->the_post();
            ?>

            <div class="meet-our-main">
                <div class="meet-our-left">
                    <figure>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="home-page-img1">
                    </figure>
                    <div class="meet-our-social">
                         <?php $link = get_field('social_icons','option'); ?>
                        <ul>
                         <li><a href="<?php echo $link['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                         <li><a href="<?php echo $link['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                         <li><a href="<?php echo $link['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                         <li><a href="<?php echo $link['instagram']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    	</ul>
                    </div>
                </div>
                <div class="meet-our-right">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php } ?>
            
            </div>
        </div>

    </section>
    <!--End MEET OUR 2019 -->

<?php get_footer(); ?>