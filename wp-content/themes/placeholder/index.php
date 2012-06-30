<?php get_header(); ?>
<?php global $woo_options; ?>

    <div id="content" class="col-full">
    	<div id="main">

    		<?php if ($woo_options['woo_intro'] == 'true') { ?>
	       	<div id="intro" class="block">
	    		<h3><span><?php echo stripslashes($woo_options['woo_intro_heading']); ?></span></h3>
	    		<p><?php echo stripslashes($woo_options['woo_intro_text']); ?></p>
	    	</div><!-- #intro -->
    	   	<?php } ?>
				    	
    		<?php if ($woo_options['woo_social'] == 'true') { ?>
	    	<div id="social" class="block">
	    		<h3><span><?php echo stripslashes($woo_options['woo_social_heading']); ?></span></h3>
	    		<div class="social-links">
		    		<?php if ($woo_options['woo_twitter'] != '') { ?>
		    		<div class="link">
		    	   		<a href="<?php echo $woo_options['woo_twitter']; ?>" class="twitter">Twitter</a>
		    	   	</div>
		    	   	<?php } ?>
		    		<?php if ($woo_options['woo_facebook'] != '') { ?>
		    		<div class="link">
		    	   		<a href="<?php echo $woo_options['woo_facebook']; ?>" class="facebook">Facebook</a>
		    	   	</div>
		    	   	<?php } ?>
		    		<?php if ($woo_options['woo_email'] != '') { ?>
		    		<div class="link">
		    	   		<a href="mailto:<?php echo $woo_options['woo_email']; ?>" class="contact">Contact</a>
		    	   	</div>
		    	   	<?php } ?>
		    		<?php if ($woo_options['woo_social_rss'] == "true") { ?>
		    		<div class="link last">
		    	   		<a href="<?php if ( $woo_options['woo_feed_url'] ) { echo $woo_options['woo_feed_url']; } else { echo get_bloginfo_rss('rss2_url'); } ?>" class="subscribe">Subscribe</a>
		    	   	</div>
		    	   	<?php } ?>
		    	   	<div class="fix"></div>
	    	   	</div>
	   		</div><!-- #social -->
    	   	<?php } ?>
	   		
    		<?php if ($woo_options['woo_countdown'] == 'true') { ?>
	   		<div id="countdown" class="block">
	    		<h3><span><?php echo stripslashes($woo_options['woo_countdown_heading']); ?></span></h3>	    	
	    		<!-- Autofilled by the jQuery Countdown script in the header.php -->
	    		<div id="timer"></div>
	   		</div>
    	   	<?php } ?>
	   		
    		<?php if ($woo_options['woo_newsletter'] == 'true') { ?>
	   		<div id="newsletter">
	   			<p><?php echo stripslashes($woo_options['woo_newsletter_text']); ?></p>
	   			
	    		<?php if ($woo_options['woo_newsletter_type'] == 'feedburner') { ?>
	    		
				<form class="newsletter-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $woo_options['woo_newsletter_ID']; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
					<input class="email" type="text" name="email" value="<?php _e('E-mail','woothemes'); ?>" onfocus="if (this.value == '<?php _e('E-mail','woothemes'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('E-mail','woothemes'); ?>';}" />
					<input type="hidden" value="<?php echo $woo_options['woo_newsletter_ID']; ?>" name="uri"/>
					<input type="hidden" value="<?php bloginfo('name'); ?>" name="title"/>
					<input type="hidden" name="loc" value="en_US"/>			
					<input class="submit" type="submit" name="submit" value="<?php echo stripslashes($woo_options['woo_submit_text']); ?>" />
				</form>
				
	    	   	<?php } elseif ($woo_options['woo_newsletter_type'] == 'campaignmonitor') { ?>
	    	   	
				<form name="campaignmonitorform" class="newsletter-form" action="<?php echo $woo_options['woo_newsletter_action']; ?>" method="post">
					<input type="text" class="email" name="cm-<?php echo $woo_options['woo_newsletter_ID']; ?>" id="<?php echo $woo_options['woo_newsletter_ID']; ?>" value="<?php _e('E-mail','woothemes'); ?>" onfocus="if (this.value == '<?php _e('E-mail','woothemes'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('E-mail','woothemes'); ?>';}" />
					<input class="submit" type="submit" name="submit" value="<?php echo stripslashes($woo_options['woo_submit_text']); ?>" />
				</form>
				
				
	    	   	<?php } elseif ($woo_options['woo_newsletter_type'] == 'mailchimp') { ?>

				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form class="newsletter-form" action="<?php echo $woo_options['woo_connect_mailchimp_list_url']; ?>" method="post" target="popupwindow" onsubmit="window.open('<?php echo $woo_options['woo_connect_mailchimp_list_url']; ?>', 'popupwindow', 'scrollbars=yes,width=650,height=520');return true">
						<input type="text" name="EMAIL" class="required email" value="<?php _e('E-mail','woothemes'); ?>"  id="mce-EMAIL" onfocus="if (this.value == '<?php _e('E-mail','woothemes'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('E-mail','woothemes'); ?>';}">
						<input type="submit" value="<?php _e('Submit', 'woothemes'); ?>" name="subscribe" id="mc-embedded-subscribe" class="btn submit button">
					</form>
				</div>
				<!--End mc_embed_signup-->
			
	    	   	<?php } ?>
	   			
<!--
	   			<form method="get" class="newsletter-form" action="<?php bloginfo('url'); ?>" >
	   				<input type="text" class="email" value="<?php _e('E-mail', 'woothemes') ?>" onfocus="if (this.value == '<?php _e('E-mail', 'woothemes') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('E-mail', 'woothemes') ?>';}" />
	   				<input type="submit" class="submit" value="<?php echo stripslashes($woo_options['woo_submit_text']); ?>" />
	   			</form>
-->
	   			
	   			<div class="fix"></div>
	   		</div>
    	   	<?php } ?>

   		</div>
    </div><!-- /#content -->
		
<?php get_footer(); ?>