<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage teachsomalia
 */
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <title><?php
  	/*
  	 * Print the <title> tag based on what is being viewed.
  	 */
  	global $page, $paged;

  	wp_title( '|', true, 'right' );

  	// Add the blog name.
  	bloginfo( 'name' );

  	// Add the blog description for the home/front page.
  	$site_description = get_bloginfo( 'description', 'display' );
  	if ( $site_description && ( is_home() || is_front_page() ) )
  		echo " | $site_description";

  	// Add a page number if necessary:
  	if ( $paged >= 2 || $page >= 2 )
  		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

  	?></title>
  <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->
	<script src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/js/libs/modernizr-2.5.3.min.js"></script>
  <?php
  	/* We add some JavaScript to pages with the comment form
  	 * to support sites with threaded comments (when in use).
  	 */
  	if ( is_singular() && get_option( 'thread_comments' ) )
  		wp_enqueue_script( 'comment-reply' );

  	/* Always have wp_head() just before the closing </head>
  	 * tag of your theme, or you will break many plugins, which
  	 * generally use this hook to add elements to <head> such
  	 * as styles, scripts, and meta tags.
  	 */
  	wp_head();
  ?>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<header>
  <nav id="main">
    <ul>
      <li class="one"></li>
      <li class="two"></li>
      <li class="three"></li>
      <li class="four"></li>
      <li class="five">
        <a href="#">HOME</a>
      </li>
      <li class="six">
        <a href="#">CAMPAIGN</a>
      </li>
      <li class="seven">
        <a href="#">JOIN MOVEMENT</a>
      </li>
      <li class="eight">
        <a href="#">CONTACT</a>
      </li>
    </ul>
  </nav>

  <section>
    <a href="/" id="logo">
      <img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/logo.png">
      <span class="title">TEACH SOMALIA</span>
      <span class="sub-title">EDUCATING THE YOUTH</span>
    </a>
  </section>

  <nav id="sub">
    <ul>
      <li><a href="#">CANADA<span>OTTOWA</span></a></li>
      <li><a href="#">CANADA<span>TORONTO</span></a></li>
      <li><a href="#">KENYA<span>NAIROBI</span></a></li>
      <li><a href="#">SWEDEN<span>STOCKHOLM</span></a></li>
      <li><a href="#">UK<span>LONDON</span></a></li>
      <li><a href="#">USA<span>MINNEAPOLIS</span></a></li>
    </ul>
  </nav>
</header>
<section id="slideshow">
  <div id="slides-wrapper">
    <div id="slides">
      <div class="slides_container">
        <a href="http://www.flickr.com/photos/stephangeyer/3020487807/" title="" target="_blank"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/slide-2.jpg" width="570" height="270" alt="Slide 2"></a>
        <div class="content-slide"><h2>Something something...</h2><p>Social business is increasingly...</p></div>
        <a href="http://www.flickr.com/photos/childofwar/2984345060/" title="" target="_blank"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/slide-3.jpg" width="570" height="270" alt="Slide 3"></a>
        <a href="http://www.flickr.com/photos/b-tal/117037943/" title="" target="_blank"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/slide-4.jpg" width="570" height="270" alt="Slide 4"></a>
        <a href="http://www.flickr.com/photos/bu7amd/3447416780/" title="" target="_blank"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
      </div>
      <a href="#" class="prev"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
      <a href="#" class="next"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
    </div>
    <img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
  </div>
</section>

<div id="content-wrapper">