<?php get_header(); ?>

 <!--Start blog -->
            <div class="blog-main">

                <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $blog = new WP_Query(array(
                    'post_type'=>'post',
                    'posts_per_page'=>4,
                    'paged' => $paged,
                ));

                while($blog->have_posts()){
                    $blog->the_post();
                 ?>
                

                <div class="cutom-container clearfix">
                    <div class="blog-contant">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_content(),25); ?> <a href="<?php the_permalink(); ?>">READ MORE. </a></p>
                    </div>
                    <div class="blog-images">
                        <figure><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>
                    </div>
                </div>

            <?php } pagination_bar( $blog );  ?>
                    <?php wp_reset_postdata(); ?>
            </div>
    <!--End blog -->

<?php get_footer(); ?>