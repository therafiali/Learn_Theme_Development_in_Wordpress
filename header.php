<!DOCTYPE html>
<!-- 
*****************************************************************
* AUTHOR :: NCodeArt
* PROJECT :: NC-Roll Coming-Soon Page
* VERSION :: 0.05
*****************************************************************
-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="NC-Roll Coming-Soon Page with beautiful and clean design. NC-Hold Coming-Soon Page built with bootstrap framework. It is fully-responsive and W3C Validate.">
    <meta name="keywords" content="roll,nc-roll,template,html template,ncodeart,nc,coming-soon,bootstrap,youtube background,slideshow background,animation background,under construction,nc roll coming soon page,kenburn,coming soon">
    <meta name="author" content="NCodeArt">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>

    <title>NCodeArt</title>

    <!-- [ LIB ] -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/animation/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/vegas/vegas.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/jquery.mb.YTPlayer/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/Magnific-Popup/magnific-popup.css">

    <!-- [ ICONS ] -->
    <link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/Icon-font-7-stroke-PIXEDEN/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/et-line-font/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/themify-icons/themify-icons.css" rel="stylesheet">

    <!-- [ TEMPLATE ] -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/fullpage/jquery.fullPage.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/nc-main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/nc-structure.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/nc-helper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/nc-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css"> <!-- [ Use for custom code ] -->

    <!-- [ FAVICONS ] -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/favicons/favicon.ico">
    <?php $logoimage = get_header_image() ?>
    <nav style="background-color: black;" class="">
        <div class="container-fluid">
            <div class="">
                <img src="<?php echo get_header_image() ?>" alt="">
            </div>


                <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav')); ?>
         

        </div>
    </nav>

</head>