<?php get_header(); ?>

<!-- green-recipe-main main -->

	<?php 
	while(have_posts()){
		the_post();
	?>
	<section class="blog-detail-main">
    	<div class="container">
         <div class="blog-detail-top">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="blog-detail-top-left">
                            <figure>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </figure>
                        </div>
                    </div>    
                    <div class="col-sm-6">
                    <div class="blog-detail-top-right">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <h3 class="subtitle">WHAT YOU NEED:</h3>
                        <?php if( have_rows('items') ): ?>
						<ul>
						<?php while( have_rows('items') ): the_row(); 
							$item = get_sub_field('item');
							?>
							<li><?php echo $item; ?></li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
                    </div>
                </div>  
            </div>
         </div>
         <div class="blog-detail-center">
            <h3 class="subtitle">WHAT YOU DO:</h3>
              <p><?php the_content(); ?></p>
              <div class="blog-services">
                <ul>
                    <li class="first-block">SERVES: <?php the_field('serves'); ?></li>
                    <li class="second-block">PREP TIME: <?php the_field('prep_time'); ?></li>
                    <li class="third-block">COOK TIME: <?php the_field('cook_time'); ?></li>
                </ul>
            </div>
         </div>
      </div>   	
  </section>
<?php } ?>
<!-- End home top main -->

<?php get_footer(); ?>