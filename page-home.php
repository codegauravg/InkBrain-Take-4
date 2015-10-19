    <?php
    /*
    Template Name: Home Page
    */

    get_header(); ?>

    <?php

/****************** ADVANCED CUSTOM FIELDS ****************************************************************************/

    $banner_desc                    =   get_field('banner_desc');
    $work_title                     =   get_field('work_title');
    $work_description               =   get_field('work_description');
    $work_title1                    =   get_field('work_title1');
    $work_description1              =   get_field('work_description1');
    $work_title2                    =   get_field('work_title2');
    $work_description2              =   get_field('work_description2');
    $work_title3                    =   get_field('work_title3');
    $work_description3              =   get_field('work_description3');
    $work_title4                    =   get_field('work_title4');
    $work_description4              =   get_field('work_description4');
    $work_title5                    =   get_field('work_title5');
    $work_description5              =   get_field('work_description5');
    $work_title6                    =   get_field('work_title6');
    $work_description6              =   get_field('work_description6');
    $ser_title                      =   get_field('ser_title');
    $ser_description                =   get_field('ser_description');
    $ser_title1                     =   get_field('ser_title1');
    $ser_desc1                      =   get_field('ser_desc1');
    $ser_title2                     =   get_field('ser_title2');
    $ser_desc2                      =   get_field('ser_desc2');
    $ser_title3                     =   get_field('ser_title3');
    $ser_desc3                      =   get_field('ser_desc3');

/**************************** CUSTOM FIELDS ****************************************************************************/

    $subscribe_txt                  =   get_post_meta(10, 'subscribe_txt', true);
    $subscribe_description          =   get_post_meta(10, 'subscribe_description', true);
    $subscribe_btn_txt              =   get_post_meta(10, 'subscribe_btn_txt', true);
    $testimonial1                   =   get_post_meta(10, 'testimonial1', true);
    $testimonial_author1            =   get_post_meta(10, 'testimonial_author1', true);
    $testimonial_designation1       =   get_post_meta(10, 'testimonial_designation1', true);
    $testimonial2                   =   get_post_meta(10, 'testimonial2', true);
    $testimonial_author2            =   get_post_meta(10, 'testimonial_author2', true);
    $testimonial_designation2       =   get_post_meta(10, 'testimonial_designation2', true);

    ?>
    <section id="head-banner" class="no-margin">
    <div class="car">
    <div class="car-inner">

    <div class="item active" style="background-image: url(/wp-content/themes/ib/assets/images/slider/bg1.jpg)">
    <div class="container">
    <div class="row slide-margin">
    <div class="col-sm-8">
    <div class="car-content">
    <h1 class="animation animated-item-1"><?php bloginfo("name"); ?></h1>
    <h2 class="animation animated-item-2">Step Start Search <br><hr>
        <?php echo $banner_desc ?><hr></h2>
        
    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
    </div>
    </div>

    <div class="col-sm-4 hidden-xs animation animated-item-4">
    <div class="slider-img">
    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/slider/inkdrop.png" class="img-responsive">
    </div>
    </div>

    </div>
    </div>
    </div><!--/.item-->
    </section><!--/#main-slider-->
    <!--COROUSEL MAIN ENDS HERE-->

    <!--OUR FEATURES TRANSFORMED TO WORKS STARTS HERE-->
    <section id="feature" >
    <div class="container">
    <div class="center wow fadeInDown pad-top">
    <h2><?php echo $work_title ?></h2>
    <p class="lead"><?php echo $work_description ?></p>
    </div>

    <div class="row">
    <div class="features">
    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="feature-wrap">
    <i class="fa fa-bullhorn"></i>
    <h2><?php echo $work_title1 ?></h2>
    <h3><?php echo $work_description1 ?></h3>
    </div>
    </div><!--/.col-md-4-->

    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="feature-wrap">
    <i class="fa fa-comments"></i>
    <h2><?php echo $work_title2 ?></h2>
    <h3><?php echo $work_description2 ?></h3>
    </div>
    </div><!--/.col-md-4-->

    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="feature-wrap">
    <i class="fa fa-cloud-download"></i>
    <h2><?php echo $work_title3 ?></h2>
    <h3><?php echo $work_description3 ?></h3>
    </div>
    </div><!--/.col-md-4-->

    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="feature-wrap">
    <i class="fa fa-leaf"></i>
    <h2><?php echo $work_title4 ?></h2>
    <h3><?php echo $work_description4 ?></h3>
    </div>
    </div><!--/.col-md-4-->

    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="feature-wrap">
    <i class="fa fa-cogs"></i>
    <h2><?php echo $work_title5 ?></h2>
    <h3><?php echo $work_description5 ?></h3>
    </div>
    </div><!--/.col-md-4-->

    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="feature-wrap">
    <i class="fa fa-heart"></i>
    <h2><?php echo $work_title6 ?></h2>
    <h3><?php echo $work_description6 ?></h3>
    </div>
    </div><!--/.col-md-4-->
    </div><!--/.services-->
    </div><!--/.row-->    
    </div><!--/.container-->
    </section><!--/#feature-->

    <!--OUR FEATURES END HERE-->

    <!--OUR SERVICES STARTS HERE-->

    <section id="services" class="service-item">
    <div class="container">
    <div class="center wow fadeInDown pad-top">
    <h2><?php echo $ser_title ?></h2>
    <p class="lead"><?php echo $ser_description ?></p>
    </div>

    <div class="row">

    <div class="col-sm-6 col-md-4">
    <div class="media services-wrap wow fadeInDown">
    <div class="pull-left">
    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/services/services1.png">
    </div>
    <div class="media-body">
    <h3 class="media-heading"><?php echo $ser_title1 ?></h3>
    <p><?php echo $ser_desc1 ?></p>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4">
    <div class="media services-wrap wow fadeInDown">
    <div class="pull-left">
    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/services/services2.png">
    </div>
    <div class="media-body">
    <h3 class="media-heading"><?php echo $ser_title2 ?></h3>
    <p><?php echo $ser_desc2 ?></p>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4">
    <div class="media services-wrap wow fadeInDown">
    <div class="pull-left">
    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/services/services3.png">
    </div>
    <div class="media-body">
    <h3 class="media-heading"><?php echo $ser_title3 ?></h3>
    <p><?php echo $ser_desc3 ?></p>
    </div>
    </div>
    </div>  
                                  
    </div><!--/.row-->
    </div><!--/.container-->
    </section><!--/#services-->

    <!--OUR SERVICES ENDS HERE-->

    <!--OUR SKILLS STARTS HERE-->

    <section id="middle">
    <div class="container">
    <div class="row">
    <div class="col-sm-6 wow fadeInDown">
    <div class="skill">
    <h2>Our Skills</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <div class="progress-wrap">
    <h3>Graphic Design</h3>
    <div class="progress">
    <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
    <span class="bar-width">85%</span>
    </div>

    </div>
    </div>

    <div class="progress-wrap">
    <h3>HTML</h3>
    <div class="progress">
    <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
    <span class="bar-width">95%</span>
    </div>
    </div>
    </div>

    <div class="progress-wrap">
    <h3>CSS</h3>
    <div class="progress">
    <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="bar-width">80%</span>
    </div>
    </div>
    </div>

    <div class="progress-wrap">
    <h3>Wordpress</h3>
    <div class="progress">
    <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
    <span class="bar-width">90%</span>
    </div>
    </div>
    </div>
    </div>

    </div><!--/.col-sm-6-->

    <div class="col-sm-6 wow fadeInDown">
    <div class="accordion">
    <h2>Why People like us?</h2>
    <div class="panel-group" id="accordion1">
    <div class="panel panel-default">
    <div class="panel-heading active">
    <h3 class="panel-title">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
    Lorem ipsum dolor sit amet
    <i class="fa fa-angle-right pull-right"></i>
    </a>
    </h3>
    </div>

    <div id="collapseOne1" class="panel-collapse collapse in">
    <div class="panel-body">
    <div class="media accordion-inner">
    <div class="pull-left">
    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/accordion1.png">
    </div>
    <div class="media-body">
    <h4>Adipisicing elit</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
    Lorem ipsum dolor sit amet
    <i class="fa fa-angle-right pull-right"></i>
    </a>
    </h3>
    </div>
    <div id="collapseTwo1" class="panel-collapse collapse">
    <div class="panel-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
    </div>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
    Lorem ipsum dolor sit amet
    <i class="fa fa-angle-right pull-right"></i>
    </a>
    </h3>
    </div>
    <div id="collapseThree1" class="panel-collapse collapse">
    <div class="panel-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
    </div>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
    Lorem ipsum dolor sit amet
    <i class="fa fa-angle-right pull-right"></i>
    </a>
    </h3>
    </div>
    <div id="collapseFour1" class="panel-collapse collapse">
    <div class="panel-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
    </div>
    </div>
    </div>
    </div><!--/#accordion1-->
    </div>
    </div>

    </div><!--/.row-->
    </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
    <div class="container">
    <div class="row pad-top">
    <div class="col-xs-12 col-sm-8 wow fadeInDown">
    <div class="tab-wrap"> 
    <div class="media">
    <div class="parrent pull-left">
    <ul class="nav nav-tabs nav-stacked">
    <li class="active"><a href="#tab1" data-toggle="tab">Subscribe Now</a></li>
    <li class=""><a href="#tab2" data-toggle="tab">Premium Plugin Included</a></li>
    <li class=""><a href="#tab3" data-toggle="tab">Predefine Layout</a></li>
    <li class=""><a href="#tab4" data-toggle="tab">Our Philosopy</a></li>
    <li class=""><a href="#tab5" data-toggle="tab">What We Do?</a></li>
    </ul>
    </div>

    <div class="parrent media-body">
    <div class="tab-content">
    
    <!--Tab 1-------------------------------------------------------------------------------------------------->
    <div class="tab-pane fade active in" id="tab1">
    <div class="media">
    <div class="pull-left">
    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tab2.png">
    </div>
    <div class="media-body">
    <h2><?php echo $subscribe_txt; ?></h2>
    <p><?php echo $subscribe_description; ?></p>
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><?php echo $subscribe_btn_txt ?></button>
    </div></div></div>
    
    <!--Tab 2-------------------------------------------------------------------------------------------------->
    <div class="tab-pane fade" id="tab2">
    <div class="media">
    <div class="pull-left">
    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tab1.png">
    </div>
    <div class="media-body">
    <h2>Adipisicing elit</h2>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
    </p>
    </div>
    </div>
    </div>

    <!--Tab 3-------------------------------------------------------------------------------------------------->
    <div class="tab-pane fade" id="tab3">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
    </div>

    <!--Tab 4-------------------------------------------------------------------------------------------------->    
    <div class="tab-pane fade" id="tab4">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
    </div>

    <!--Tab 5-------------------------------------------------------------------------------------------------->    
    <div class="tab-pane fade" id="tab5">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
    </div>
    </div> <!--/.tab-content-->  
    </div> <!--/.media-body--> 
    </div> <!--/.media-->     
    </div><!--/.tab-wrap-->               
    </div><!--/.col-sm-6-->

    <div class="col-xs-12 col-sm-4 wow fadeInDown">
    <div class="testimonial">
    <h2>Testimonials</h2>
    <div class="media testimonial-inner">
    <div class="pull-left">
    <img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonials1.png">
    </div>
    <div class="media-body">
    <p><?php echo $testimonial1; ?></p>
    <span><strong><?php echo $testimonial_author1; ?>/</strong><?php echo $testimonial_designation1; ?></span>
    </div>
    </div>

    <div class="media testimonial-inner">
    <div class="pull-left">
    <img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonials1.png">
    </div>
    <div class="media-body">
    <p><?php echo $testimonial2; ?></p>
    <span><strong><?php echo $testimonial_author2; ?>/</strong><?php echo $testimonial_designation2; ?></span>
    </div>
    </div>

    </div>
    </div>

    </div><!--/.row-->
    </div><!--/.container-->
    </section><!--/#content-->

    <!--SUBSCRIBE MODAL BOX-->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Modal Header</h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" role="form">
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter your email id">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Message:</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter a message">
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </div>
        </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div></div>
        
    <!--OUR SKILLS AND TESTIMONIALS HERE-->

    <!--OUR PARTNERS STARTS HERE-->
    <!--
    <section id="partner">
    <div class="container">
    <div class="center wow fadeInDown">
    <h2>Our Partners</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
    </div>    

    <div class="partners">
    <ul>
    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/partners/partner1.png"></a></li>
    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/partners/partner2.png"></a></li>
    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/partners/partner3.png"></a></li>
    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/partners/partner4.png"></a></li>
    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/partners/partner5.png"></a></li>
    </ul>
    </div>        
    </div><!--/.container-->
    </section><!--/#partner-->
    -->
    <!--OUR PARTNERS ENDS HERE-->

    <!--OUR CONTACTS STARTS HERE-->
    <section id="conatcat-info">
    <div class="container">
    <div class="row">
    <div class="col-sm-8 pad-top">
    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="pull-left">
    <i class="fa fa-phone"></i>
    </div>
    <div class="media-body">
    <h2>Have a question or need a custom quote?</h2>
    <p>Feel free to contact through email, social services, our comment box or on cellphone +91 7837 222 917</p>
    </div>
    </div>
    </div>
    </div>
    </div><!--/.container-->    
    </section><!--/#conatcat-info-->

    <!--OUR CONTACTS ENDS HERE-->

    <?php get_footer(); ?>
