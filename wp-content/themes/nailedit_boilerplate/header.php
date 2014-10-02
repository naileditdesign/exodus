<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  
    <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
      <head profile="http://gmpg.org/xfn/11">
      <meta charset="utf-8" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        
        <!-- Add CSS Files Here -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" type="text/css" />

        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/styles.ie.css" />
        <![endif]-->
        
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
          <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <![endif]-->
         
     
     <!-- Add Wordpress RSS Here -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    
  
    <?php wp_head(); ?>

    <!-- Edit Plugin Style's // Overwrite -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wpuf-styles.css" type="text/css" />


    <!-- Add Java Script Files Here -->
    
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
    
    <!-- Add Wordpress Pnig Here -->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
       
  
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/ico/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-114x114.png">
        
      
  
    </head>
    <!-- Header Start -->
    <?php locate_template( array( 'header-start.php' ), true ); ?>


