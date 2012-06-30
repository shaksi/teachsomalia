<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package teachsomalia
 */

get_header(); ?>
<div role="main" class="clearfix">
  <section>
    <h1>Welcome to Teach Somalia</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus qui.</a></p>

    <h2>Why Teach Somalia?</h2>
    <iframe width="560" height="315" src="http://www.youtube.com/embed/rGwIqcwUxQw" frameborder="0" allowfullscreen></iframe>
    <ul id="video-thumbnails" class="clearfix">
      <li><a href="#"><img src="img/video-thumb.jpg" /></a></li>
      <li><a href="#"><img src="img/video-thumb.jpg" /></a></li>
      <li><a href="#"><img src="img/video-thumb.jpg" /></a></li>
      <li><a href="#"><img src="img/video-thumb.jpg" /></a></li>
      <li><a href="#"><img src="img/video-thumb.jpg" /></a></li>
    </ul>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus qui.</a></p>
  </section>

  <aside id="twitter">
    <h3>
      @TeachSomalia
      <img src="img/twitter-title.png" />
    </h3>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="#">10 days ago</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor. <a href="#">10 days ago</a></p>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="#">9 days ago</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor. <a href="#">7 days ago</a></p>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="#">5 days ago</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor. <a href="#">4 days ago</a></p>

    <ul id="social">
      <li><a href="#"><img src="img/facebook.png" /></a></li>
      <li><a href="#"><img src="img/blog.png" /></a></li>
      <li><a href="#"><img src="img/twitter.png" /></a></li>
    </ul>
  </aside>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>