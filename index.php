<?php
   get_header();
?>

<div class="home">
  <div class="home-container">
    <div class="avatar item-avatar home-item" id="avatar">
      <img src="<?php echo get_option('admin_avatar'); ?>" alt="<?php get_option('admin_name'); ?>">
      <h1 class="home-title" id="title"><?php echo get_option('admin_fullname'); ?></h1>
    </div>
    <div class="home-item item-publications">
      <div class="options-inner">
        <a aria-label="Publications" class="hint--bottom" href="<?php bloginfo('wpurl'); ?>/category/publications"><img src="<?php bloginfo('template_url'); ?>/img/publication.png" alt=""></a>
      </div>
    </div>
    <div class="home-item item-cv">
      <div class="options-inner">
        <a aria-label="CV" class="hint--bottom" href="<?php bloginfo('wpurl'); ?>/cv"><img src="<?php bloginfo('template_url'); ?>/img/cv.png" alt=""></a>
      </div>
    </div>
    <div class="home-item item-projects">
      <div class="options-inner">
        <a aria-label="Projects" class="hint--bottom" href="<?php bloginfo('wpurl'); ?>/category/projects"><img src="<?php bloginfo('template_url'); ?>/img/project.png" alt=""></a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
