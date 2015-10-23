<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inkbrain
 */

get_header(); ?>

<section id="blog" class="container pad-top">
<div class="center">
<h2>Blogs</h2>
<p class="lead">Welcome to Inkbrain Blog. You've stepped now get set start and search...!</p>
</div>

<div class="blog">
<div class="row">
<div class="col-md-8">
<div class="blog-item">
<div class="row">
    <div class="col-xs-12 col-sm-12 blog-content">
    
        <?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

    </div>
</div>    
</div><!--/.blog-item-->
</div><!--/.col-md-8-->

 <aside class="col-md-4">
    
    <div class="widget search">
    <form role="form">
            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
    </form>
    </div><!--/.search-->
</aside>
    <div class="align-stretch"><?php get_sidebar(); ?></div>
    
</div><!--/.row-->
</div>
</section><!--/#blog-->


<?php get_footer(); ?>
