        <?php 
        /*
          Template Name: Template Profile page
         */
        //get_header(); ?>
        <!DOCTYPE html> 
        <html class="no-js" <?php language_attributes(); ?>>
        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
            window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"light-top"};
        </script>

        <!--<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>-->
        <!-- End Cookie Consent plugin -->

        <head>
    <meta name="google-site-verification" content="IWZI3_sfIL1lxz2Z5lzWRiNbT5HpISrjvI5XGskboHU" />
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-54310854-1', 'auto');
          ga('send', 'pageview');

        </script>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title><?php wp_title(''); ?></title>

            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap.min.css" type="text/css" media="all">
            <?php wp_head(); ?>
            <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/jquery-ui.css" />
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/animate.min.css" type="text/css" media="all">
               
                <link rel="stylesheet" href="<?php bloginfo('template_url');?>/owl.carousel/assets/owl.carousel.min.css" />
                <link rel="stylesheet" href="<?php bloginfo('template_url');?>/owl.carousel/assets/owl.theme.default.min.css" />

        </head>

        <body <?php body_class(); ?>>

        <?php
	echo do_shortcode( '[peepso_profile]' );	
	?>

        <?php wp_footer(); ?>
        <!--<script src="<?php echo bloginfo('template_url')?>/js/bootstrap.min.js"></script>-->
        <!-- Waypoints script -->
        <script src="<?php echo bloginfo('template_url')?>/js/waypoints.min.js"></script>

        <!-- Counterup script -->
        <script src="<?php echo bloginfo('template_url')?>/js/jquery.counterup.min.js"></script>

        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script src="<?php bloginfo('template_url');?>/owl.carousel/owl.carousel.min.js"></script>
       
        </body>
        </html>