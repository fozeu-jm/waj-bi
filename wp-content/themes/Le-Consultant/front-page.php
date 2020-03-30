<?php
get_header();
?>


<!--Header-Area-->
<header class="header-area overlay" id="home-area" style="background: url(<?php echo get_field('background'); ?>) no-repeat scroll center center / cover;">
    <div class="vcenter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8">
                    <div class="header-text">
                        <h2 class="header-title wow fadeInUp"> <?php echo get_field('text1'); ?> <span class="dot"></span></h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s"><q><?php echo get_field('text2'); ?></q></div>
                        <div class="wow fadeInUp" data-wow-delay="0.7s">
                            <a id="contact-btn" href="#contact-area" class="bttn bttn-lg bttn-primary">Contactez nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header-Area-/-->


<!-- About-Area -->
<section class="section-padding" id="about-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5">
                <div class="page-title">
                    <h2 class="title wow fadeInUp"><?php echo get_field('titre1'); ?></h2>
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <p><?php echo get_field('about_text'); ?></p>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.7s">
                    <a href="#" class="bttn bttn-primary">Savoir plus</a>
                </div>
            </div>
            <div class="hidden-xs col-sm-6 col-md-offset-1">
                <img src="<?php echo get_field('about_image'); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- About-Area / -->



<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="video-box">
                    <img src="<?php echo get_field('section3_image'); ?>" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">
                <div class="page-title">
                    <h2 class="title"><?php echo get_field('section3_tittle'); ?></h2>
                    <ul class="tabs-list">
                        <li class="active"><a data-toggle="pill" href="#our_mission">Notre Mission</a></li>
                        <li><a data-toggle="pill" href="#our_vission">Notre Vision</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div style="text-align: justify;" id="our_mission" class="tab-pane fade in active">
                        <?php echo get_field('notre_mission'); ?>
                    </div>
                    <div style="text-align: justify;" id="our_vission" class="tab-pane fade">
                        <?php echo get_field('notre_vision'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- service-area -->
<section class="section-padding" id="service-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h2 class="title">Nos Services</h2>
                    <p>Toujours unpeu plus loins pour vous servir</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="<?php echo get_field('service_image'); ?>" alt="Service_image">
                            <a href="#" class="box-plus">
                                <i class="icofont icofont-plus"></i>
                            </a>
                        </div>
                        <div class="box-text">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<!-- service-area -->





<!-- Skill-Area -->
<!--<section class="section-padding gray-bg" id="skill-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5">
                <div class="page-title">
                    <h2 class="title wow fadeInUp">Our Professional Skill</h2>
                    <div class="wow fadeInUp">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</p>
                    </div>
                </div>
                <div class="skills skills1 row">
                     main skill No. 1 
                    <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="chart chart1 center" data-percent="95">
                            <span class="counter">95</span>
                        </div>
                        <h6>WebDesign</h6>
                    </div>
                     main skill No. 2 
                    <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="chart chart1 center" data-percent="85">
                            <span class="counter">85</span>
                        </div>
                        <h6>Coding</h6>
                    </div>
                     main skill No. 3 
                    <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="chart chart1 center" data-percent="90">
                            <span class="counter">90</span>
                        </div>
                        <h6>Developing</h6>
                    </div>
                     main skill No. 4 
                    <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="chart chart1 center" data-percent="95">
                            <span class="counter">95</span>
                        </div>
                        <h6>Java Script</h6>
                    </div>
                     main skill No. 4 
                    <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="1s">
                        <div class="chart chart1 center" data-percent="85">
                            <span class="counter">85</span>
                        </div>
                        <h6>Apps Design</h6>
                    </div>
                     main skill No. 4 
                    <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="chart chart1 center" data-percent="90">
                            <span class="counter">90</span>
                        </div>
                        <h6>Graphics Script</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-offset-1">
                <img src="<?php echo get_theme_file_uri('images/skill-image.png'); ?>" alt="">
            </div>
        </div>
    </div>
</section>-->
<!-- Skill-Area / -->





<!-- Team-Area -->
<section class="section-padding gray-bg" id="team-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2 class="title">Notre Équipe</h2>
                    <p>Une équipe devoué a votre service</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'team',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="team-box two wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="<?php echo get_field('member_image'); ?>" alt="">
                        </div>
                        <div class="team-hover text-center">
                            <h5 class="t_title"><?php the_title(); ?></h5>
                            <span class="t_sub_title"><?php echo get_field('position'); ?></span>
                            <p><?php the_content(); ?></p>
                            <br />
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- Team-Area / -->


<!-- working-process -->
<section id="method-area" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h2 class="title">Notre Methodologie</h2>
                    <p>Un moteur bien huilé qui produit des résultats</p>
                </div>
            </div>
        </div>
        <div style="background: url(<?php echo get_theme_file_uri('images/service-line.jpg'); ?> ) no-repeat scroll top 20px center;" class="row process text-center">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-process">
                    <div class="process-icon">
                        <i class="icofont icofont-pie"></i>
                    </div>
                    <h3><?php echo get_field('method1'); ?></h3>
                    <p><?php echo get_field('description1'); ?></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-process">
                    <div class="process-icon">
                        <i class="icofont icofont-users-alt-1"></i>
                    </div>
                    <h3><?php echo get_field('method2'); ?></h3>
                    <p><?php echo get_field('description2'); ?></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-process">
                    <div class="process-icon">
                        <i class="icofont icofont-brainstorming"></i>
                    </div>
                    <h3><?php echo get_field('method3'); ?></h3>
                    <p><?php echo get_field('description3'); ?></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-process">
                    <div class="process-icon">
                        <i class="icofont icofont-settings-alt"></i>
                    </div>
                    <h3><?php echo get_field('method4'); ?></h3>
                    <p><?php echo get_field('description4'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- working-process -->

<!-- FAQ-Area -->
<section class="section-padding gray-bg" id="more-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h2 class="title">Foire aux questions</h2>
                    <p>Les questions que vous vous posé</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-sm-12">
                <div class="row">
                    <div class="panel-group accordion1" id="accordion">
                        <!-- question element -->
                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'question',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                        ));
                        $i = 1;
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                        <div style="margin-bottom: 25px;" class="col-lg-6">
                                <div class="panel">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>"><?php the_title(); ?></a>
                                    <div id="collapse<?php echo $i; ?>" class="collapse">
                                        <div style="word-break: break-word;" class="text-body"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php $i ++;
                        } wp_reset_postdata(); ?>
                        <!-- question element -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ-Area / -->






<!-- Contact-Area -->
<section class="section-padding" id="contact-area">
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h3 class="bar-title">Contactez nous</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="contact-form">
                        <div class="row">
                            <?php the_content(); ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="contact-info">
                        <ul class="info">
                            <li>
                                <span class="info-icon">
                                    <i class="icofont icofont-social-google-map"></i>
                                </span> PO Box. 412 <br /> Centre, Yaoundé
                            </li>
                            <li>
                                <span class="info-icon">
                                    <i class="icofont icofont-ui-cell-phone"></i>
                                </span> (+237) 699 99 89 56 
                            </li>
                            <li>
                                <span class="info-icon">
                                    <i class="icofont icofont-ui-cell-phone"></i>
                                </span> (+237) 672 91 39 24
                            </li>
                            <li>
                                <span class="info-icon">
                                    <i class="icofont icofont-envelope"></i>
                                </span> contact@waj-bi.com
                            </li>
                        </ul>
                        <div class="social-menu-2">
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-social-skype"></i></a>
                            <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-Area / -->
<div id="contacts" style="background: url(<?php echo get_theme_file_uri('images/contact.jpg'); ?>); background-size: cover; background-position-y: 65%;">
    
</div>



<?php
get_footer();
?>