<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<?php global $woo_options; ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( $woo_options['woo_feed_url'] ) { echo $woo_options['woo_feed_url']; } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      
<?php wp_head(); ?>
<?php woo_head(); ?>

<?php 
// Set date
$date = explode('/',$woo_options['woo_countdown_date']);
$time = explode(':',$woo_options['woo_countdown_time']);
if ($woo_options['woo_countdown'] == 'true') { 
?>
<script type="text/javascript">
jQuery(function () {
	jQuery('#timer').countdown({until: new Date(<?php echo $date[2].','. $date[0].' - 1,'.$date[1].', '.$time[0].', '.$time[1]; ?>), format: 'DHMS'});});
</script>
<?php } ?>

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">
           
	<div id="header" class="col-full">
 		       
		<div id="logo">
	       
		<?php if ($woo_options['woo_texttitle'] <> "true") : $logo = $woo_options['woo_logo']; ?>
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>">
				<img src="<?php if ($logo) echo $logo; else { bloginfo('template_directory'); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
        <?php endif; ?> 
        
        <?php if( is_singular() && !is_front_page() ) : ?>
			<span class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
        <?php else : ?>
			<h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php endif; ?>
			<span class="site-description"><?php bloginfo('description'); ?></span>
	      	
		</div><!-- /#logo -->
	              
	</div><!-- /#header -->           