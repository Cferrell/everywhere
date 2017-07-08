<?php

/* 	Travel Theme's Header
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php 

wp_head(); ?>

</head>

<body <?php body_class(); ?> >

  
  	  <div id="top-menu-container">
        
      <?php get_search_form(); ?>  
      <div id="social">
<?php  if (travel_get_option('gplus-link', '#') !='') : ?>
<a href="<?php echo esc_url(travel_get_option('gplus-link', '#')); ?>" class="gplus-link" target="_blank"></a>
<?php  endif; if (travel_get_option('con-link', '#') !='') : ?>
<a href="<?php echo esc_url(travel_get_option('con-link', '#')); ?>" class="con-link" target="_blank"></a>
<?php  endif; ?>
</div></div><div class="clear"></div>
      <div id ="header">
      <div id ="header-content">
      
		<!-- Site Titele and Description Goes Here -->
        <?php if (get_header_image() !='' ): ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img class="site-logo" src="<?php header_image(); ?>"/></a>
         <?php ; else : ?> 
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
         <?php ; endif; ?>     
        
		<h2 class="site-title-hidden"><?php bloginfo( 'description' ); ?></h2>
                
        <!-- Site Main Menu Goes Here -->
        <nav id="travel-main-menu">
		<?php if ( has_nav_menu( 'main-menu' ) ) :  wp_nav_menu( array( 'theme_location' => 'main-menu' )); else: wp_page_menu(); endif; ?>
        </nav>
      
      </div><!-- header-content -->
      </div><!-- header -->
       
	         
       
       
      
	  
	 
	  