<?php
   get_header();
?>
<?php if (have_posts()): ?>
<div class="cat-list single">
<?php while (have_posts()): the_post(); ?>
  <article class="cat-item">
    <section class="post-avatar">
      <a href="<?php bloginfo('wpurl'); ?>">< Home</a>
      <div class="post-avatar-inner">
        <?php if (has_post_thumbnail(get_the_ID())): ?>
        <?php the_post_thumbnail(array(300,300), array('class' => '', 'alt' => get_the_title())); ?>
        <?php endif; ?>
      </div>
    </section>

    <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
    <?php if( $attachments->exist() ) : ?>
    <ul class="attachments-list">
    <?php while( $attachments->get() ) : ?>
      <li>
        <a target="_blank" download href="<?php echo $attachments->url(); ?>"><?php echo $attachments->field( 'title' ); ?></a>
      </li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>

    <section class="post-info">
      <h1 class="title"><?php the_title(); ?></h2>
      <div class="desc"><?php the_content(); ?></div>
    </section>
  </article>
<?php endwhile; ?>
</div>
<?php else: ?>
<div class="no-post">Nothing Here</div>
<?php endif; ?>

<?php get_footer(); ?>
