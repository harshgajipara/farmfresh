<?php get_header(); ?>

  <!-- Start home top main -->
    <section class="home-top-main">
        <div class="container">
            <div class="row">
                <div class="custom-column col-md-6">
                    <figure>
                        <img src="<?php the_field('title_image') ?>" alt="home-page-img1">
                    </figure>
                    <div class="home-top-social">
                         <?php $link = get_field('social_icons','option'); ?>
                        <ul>
                            <li><a href="<?php echo $link['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $link['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $link['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $link['instagram']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="custom-column col-md-6">
                    <h2>
                        <?php $title = get_field('title'); ?>
                    	<span class="styles"><?php echo $title['starting_text']; ?></span>
                        <p><?php echo $title['main_title']; ?><span><?php echo $title['sub_title']; ?></span></p>
                    </h2>
                    <p><?php the_field('description'); ?></p>
                    <a href="<?php echo site_url('/registered-dietician'); ?>"><?php the_field('button_text'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home top main -->

    <!-- Start home center main -->
    <section class="home-center-mian">
        <div class="container">
            <div class="home-center-left">
                <?php $about = get_field('about'); ?>
                <figure>
                    <img class="img-responsive" src="<?php echo $about['image']; ?>" alt="home-page-img2">
                </figure>
            </div>
            <div class="home-center-right">
                <h3><?php echo $about['title']; ?></h3>
                <p><?php echo $about['description']; ?></p>
            </div>
        </div>
    </section>
    <!-- Start home center main -->

    <!-- Start home bottom main -->
    <section class="home-bottom-main">

        <?php $i=0; if( have_rows('featured_receipe') ): ?>

            <?php while( have_rows('featured_receipe') ):  the_row(); 
                    
                 $image = get_sub_field('image');
                 $main_title = get_sub_field('main_title');
                 $sub_title = get_sub_field('sub_title');
                 $description = get_sub_field('description');   
                 $link = get_sub_field('link');

                ?>

                  <?php if(($i%2)==0): ?>
                  <div class="cutom-row">
                    <div class="home-bottom-contant">
                        <h2>featured recipes</h2>
                        <h3><?php echo $main_title; ?></h3>
                        <h4><?php echo $sub_title; ?></h4>
                        <p><?php echo  wp_trim_words($description,25); ?> <a href="<?php echo $link; ?>">READ MORE. </a></p>
                    </div>
                    
                    <div class="home-bottom-images">
                        <figure><img class="img-fluid" src="<?php echo $image['url']; ?>" alt=""></figure>
                    </div>
                <?php endif; $i++; ?>
                </div>


                <?php if(($i%2)==0): ?>
                  <div class="cutom-row">
                    <div class="home-bottom-images">
                        <figure><img class="img-fluid" src="<?php echo $image['url']; ?>" alt=""></figure>
                    </div>
                    <div class="home-bottom-contant">
                        <h3><?php echo $main_title; ?></h3>
                        <h4><?php echo $sub_title; ?></h4>
                        <p><?php echo  wp_trim_words($description,25); ?><a href="<?php echo $link; ?>">READ MORE. </a></p>
                    </div>
                <?php endif; ?>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
  
        <div class="home-bottom-click">
            <a href="<?php echo get_the_permalink('our-leafy-greens'); ?>"><?php the_field('bottom_click_text'); ?></a>
        </div>
    </section>
    <!-- End home bottom main -->

<?php get_footer(); ?>