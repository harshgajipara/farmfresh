<?php get_header(); ?>

<?php 
	the_archive_title( '<h1 class="page-title">', '</h1>' );  
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>

<?php
	while(have_posts()){
		the_post();
?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php } ?>

<?php get_footer(); ?>