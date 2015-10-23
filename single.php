<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Inkbrain
 */

get_header(); ?>

<section id="blog" class="container pad-top">
<div class="blog">
<div class="row">
<div class="col-md-8">
<div class="blog-item">
<div class="row">
    <div class="col-xs-12 col-sm-12 blog-content">
    
        <?php while ( have_posts() ) : the_post(); ?>
        
            <h2><?php single_post_title(); ?></h2>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>
    </div>
    <div class="col-xs-12 col-sm-12 blog-content">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
    ?><?php endwhile; // End of the loop. ?>
</div>
</div>    
</div><!--/.blog-item-->
</div><!--/.col-md-8-->

<?php get_sidebar(); ?>
  
</div><!--/.row-->
</div>
</section><!--/#blog-->
    
<?php get_footer(); ?>
