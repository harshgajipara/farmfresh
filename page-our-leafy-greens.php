<?php get_header(); ?>

 <!--Start LEAFY GREENS -->
    <section class="leafygreens-main">
        <div class="leafygreens-hedding">
            <div class="container">
                <h2>sort by:</h2>
            </div>
        </div>
        <div class="leafygreens-tab">
            <div class="container">
                <ul class="nav nav-tabs">
                    <?php 
                    $taxonomy = 'category';
                    $terms = get_terms($taxonomy);
                    $counter = 1; 
                    foreach($terms as $singleterm)
                    { ?>
                         <li <?php if($counter == "1") { echo "class='active'";} ?>>
                           <a data-toggle="tab" href="#leafygreens-<?php echo $singleterm->term_id; ?>">
                            <img class="active-images" src="<?php echo get_stylesheet_directory_uri(); ?>/images/im.png" alt="">
                            <img class="none-active-images" src="<?php echo get_stylesheet_directory_uri(); ?>/images/none-active.png" alt="">
                            <h2><?php echo $singleterm->name; ?></h2>
                           </a>
                       </li> 
                   <?php  $counter++; }
                      ?>
                </ul>
            </div>
        </div>
        
        <div class="leafygreens-contant">
            <div class="tab-content clearfix">

                <?php $counterpost = 1;
                    $taxonomy = 'category';
                    $terms = get_terms($taxonomy);
                    $counterpost = 1; 
                     foreach($terms as $singleterm)
                    { 

                        ?>
                        <div class="tab-pane fade in <?php if($counterpost == "1") { echo 'active';} ?>" id="leafygreens-<?php echo $singleterm->term_id; ?>">
                            <div class="blog-main">
                                <?php
                                $args = array(
                                        'post_type'             => 'post',
                                        'post_status'           => 'publish',
                                        'posts_per_page'        => '12',
                                        'tax_query'             => array(
                                            array(
                                                'taxonomy'      => 'category',
                                                'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                                                'terms'         => $singleterm->term_id,
                                                'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                                            )
                                        )
                                    ); ?>
                                    
                                <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="1" taxonomy="category" taxonomy_terms="'.$singleterm->slug.'" taxonomy_operator="IN" button_label="Loading.."]'); ?>
                             </div>
                        </div>
                   <?php
                   $counterpost++ ;
                   } ?>
               
            </div>
        </div>
    </section>
    <!-- override woocommerce theme file structure -->
    <!--End LEAFY GREENS -->

<?php get_footer(); ?>