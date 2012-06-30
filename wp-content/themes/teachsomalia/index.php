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
		<?php if ( have_posts() ) : ?>

			<?php twentyeleven_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php twentyeleven_content_nav( 'nav-below' ); ?>

		<?php endif ; ?>
</section>

  <aside id="twitter">
    <h3>
      @TeachSomalia
      <img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img//twitter-title.png" />
    </h3>

    <?php
      echo do_shortcode('[twitter-feed mode="hashtag" hashtag="teachsomalia" img=”yes” followbutton="no" hashlinks="no" linktotweet="no" tweetintent="no" divid="twitterfeed"]');
    ?>
    <ul id="social">
      <li><a href="https://www.facebook.com/TeachSomaliaCampaign"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img//facebook.png" /></a></li>
      <li><a href="https://twitter.com/teach_somalia"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img//twitter.png" /></a></li>
    </ul>
  </aside>
</div>

<?php get_footer(); ?>