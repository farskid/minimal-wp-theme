</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/images.js"></script>
<script type="text/javascript">
  (function() {
    var avatarURL = '<?php echo get_option("admin_avatar"); ?>';
    lazyImage(avatarURL, document.getElementById('avatar'));
  })();
</script>
</body>
</html>
