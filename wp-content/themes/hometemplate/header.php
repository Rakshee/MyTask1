<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Template</title>
  
   <link href=" <?php echo get_bloginfo('template_url'); ?>/asset/css/font-awesome.min.css" rel="stylesheet">
  
  <link href=" <?php echo get_bloginfo('template_url'); ?>/asset/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="<?php echo get_bloginfo('template_url'); ?>/asset/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link  href=" <?php echo get_bloginfo('template_url'); ?>/style.css"  rel="stylesheet">
  <link  href=" <?php echo get_bloginfo('template_url'); ?>/asset/fonts/fontawesome-webfont.woff"  rel="stylesheet">
  
</head>
<body>
  
    <!-- Nav bar  -->
     <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top ">
         <div class="class container">
        <a href="#"  class="class navbar-brand"><img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png"></a>
      

    <div class="collapse navbar-collapse">
      
                    <?php
                        wp_nav_menu(
                            array('theme_location'=>'primary',
                            'container'=>false,
                            'menu_class'=>'navbar-nav ml-auto')
                        );
                    ?>
   
</nav> 