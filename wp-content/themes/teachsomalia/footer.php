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
  <div id="about">
    <h4>About Teach Somalia</h4>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
  </div>

  <div id="contact">
    <h4>Contact Teach Somalia Campaign</h4>
    <p>
      Teach Somalia (USS)<br />
      8 Rock Street<br />
      Finsbury Park<br />
      London, N4 2DN<br />
      United Kingdom
    </p>
    <p>
      tel: +44 (0)207 845 7610<br />
      email: <a href="mailto:info@teachsomalia.com">info@teachsomalia.com</a>
    </p>
  </div>

  <div id="links">
    <ul>
      <li><a href="http://unitedforsomalistudents.com/"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/uss.jpg" /></a></li>
      <li><a href="http://www.somalichannel.co.uk/"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/somalichannel.jpg" /></a></li>
      <li><a href="http://universaltv.co/"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/gsr.jpg" /></a></li>
      <li><a href="#"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/sntv.jpg" /></a></li>
      <li><a href="http://www.savesom.blogspot.co.uk/"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/save.jpg" /></a></li>
      <li><a href="http://universaltv.co/"><img src="<?php echo CHILD_TEMPLATE_DIRECTORY ?>/img/partners/universal.jpg" /></a></li>

      
      <li><img src="<?php echo CHILD_TEMPLATE_DIRECTORY; ?>/img/links-ribbon.png" /></li>
    </ul>
  </div>
  <!-- cidprotv.jpg royaltv.jpg gsr.jpg save.jpg hctv.jpg -->
  <nav>
    <ul>
      <li><a href="#">HOME</a></li>
      <li><a href="#">ABOUT US</a></li>
      <li><a href="#">OUR WORK</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>

    <p>Copyright United for Teach Somalia 2012. All rights reserved.</p>
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
