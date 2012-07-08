<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage teachsomalia
 */
?>
<footer class="clearfix">
  <div id="contact">
    <p><a href="http://teachsomaliaglobal.wufoo.com/forms/teach-somalia-volunteer-form/"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/join_campaign.png" /></a></p>
  </div>

  <div id="logos">
    <img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/partners.png" />
  </div>
  <nav>
    <ul>
      <li><a href="/">HOME</a></li>
      <li><a href="/about">ABOUT US</a></li>
      <li><a href="/campaign">CAMPAIGN</a></li>
      <li><a href="/contact" class="smcf-link">CONTACT</a></li>
      
    </ul>

    <p>All rights reserved by the respectful owners. Teach Somalia 2012.</p>
  </nav>
</footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/js/plugins.js"></script>
<script src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/js/script.js"></script>
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php wp_footer(); ?>
</body>
</html>
