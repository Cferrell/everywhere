<?php
/*
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<?php get_header(); ?>
</div><div class="vspace"> </div>
<div class="label-text"><h3><?php echo travel_get_option('fpheading', 'Test Place, Sample Country'); ?></h3></div>
<div id="container">
<?php get_template_part( 'featured-box' ); ?> 
<?php if (travel_get_option('fpostex', '2') != '1'): get_template_part( 'fcontent' ); endif;?>
<div class="content-ver-sep"></div>
</div>
<?php get_footer(); ?>