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
    
    <?php get_sidebar(); ?>
    

    <div class="widget categories">
    <h3>Recent Comments</h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="single_comments">
                <img src="images/blog/avatar3.png" alt=""  />
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                <div class="entry-meta small muted">
                    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                </div>
            </div>
        </div>
    </div>                     
    </div><!--/.recent comments-->


    <div class="widget categories">
    <h3>Categories</h3>
    <div class="row">
        <div class="col-sm-6">
            <ul class="blog_category">
                <li><a href="#">Computers <span class="badge">04</span></a></li>
                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                <li><a href="#">Gadgets <span class="badge">06</span></a></li>
                <li><a href="#">Technology <span class="badge">25</span></a></li>
            </ul>
        </div>
    </div>                     
    </div><!--/.categories-->

    <div class="widget archieve">
    <h3>Archieve</h3>
    <div class="row">
        <div class="col-sm-12">
            <ul class="blog_archieve">
                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
            </ul>
        </div>
    </div>                     
    </div><!--/.archieve-->

    <div class="widget tags">
    <h3>Tag Cloud</h3>
    <ul class="tag-cloud">
        <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
        
    </ul>
    </div><!--/.tags-->

</aside>  
</div><!--/.row-->
</div>
</section><!--/#blog-->


<?php get_footer(); ?>
