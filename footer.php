    </div>
    <!-- #main -->
<footer>
<div id="footer-container">
        
    <?php if ( is_sidebar_active('footer_widget_1') ) : ?>

      <?php dynamic_sidebar('footer_widget_1'); ?>

    <?php endif; ?>     


    <?php if ( is_sidebar_active('footer_widget_2') ) : ?>

      <?php dynamic_sidebar('footer_widget_2'); ?>

    <?php endif; ?>     

    <?php if ( is_sidebar_active('footer_widget_3') ) : ?>

      <?php dynamic_sidebar('footer_widget_3'); ?>

		<?php endif; ?>     
        
    </div>
</footer>

<div id="copyright"><p>&copy; 2012 New Mexico State University Board of Regents</p></div>
    <!-- #copyright --> 
  </div>
  <!-- #mobile --> 
</div>
<!-- #wrapper -->
<?php wp_footer(); ?>
</body>
</html>