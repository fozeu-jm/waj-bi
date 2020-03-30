<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaizer Web Design">
        <meta name="keywords" content="Kaizer Web Design, KWD, Kaizer Web Design">
    </head>

    <body data-spy="scroll" data-target=".mainmenu-area">
        <!--Preloader-->
        <div style="text-align: center;" class="preloader">
            <div style="background-image: url(<?php echo get_theme_file_uri('images/logo_2.png'); ?>);" class="spinner"></div>
        </div>

        <!-- Mainmenu-Area -->
        <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navbar-header smoth">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <a class="navbar-brand" href="#home-area">
                                <img style="max-height: 100%; max-width: 100%;" src="<?php echo get_theme_file_uri('images/logo_4.png'); ?>" alt="">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                            <ul class="nav navbar-nav navbar-right help-menu">
                                <li style="visibility: hidden;"><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                                <li class="select-cuntry">
                                    <div id="weglot_here"></div>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav primary-menu">
                                <li class="active"><a href="#home-area">Accueil</a></li>
                                <li><a href="#service-area">Services</a></li>
                                <li><a href="#team-area">L'équipe</a></li>
                                <li><a href="#method-area">Methodologie</a></li>
                                <li><a href="#more-area">En Savoir Plus</a></li>
                                <li><a href="#contact-area">Contact</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Mainmenu-Area-/ -->