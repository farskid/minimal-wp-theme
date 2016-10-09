<?php
   get_header();
?>
<h1 class="cat-title"><?php single_cat_title(); ?> <small><a href="<?php bloginfo('wpurl'); ?>">< Home</a></small></h1>
<?php if (have_posts()): ?>
<div class="cat-list">
<?php while (have_posts()): the_post(); ?>
  <article class="cat-item">
    <div>
      <sidebar class="post-avatar">
        <div class="post-avatar-inner">
          <?php if (has_post_thumbnail(get_the_ID())): ?>
          <?php the_post_thumbnail(array(300,300), array('class' => '', 'alt' => get_the_title())); ?>
          <?php endif; ?>
        </div>
        <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
        <?php if( $attachments->exist() ) : ?>
        <ul class="attachments-list cat-attachments">
        <?php while( $attachments->get() ) : ?>
          <li>
            <a target="_blank" download href="<?php echo $attachments->url(); ?>"><?php echo $attachments->field( 'title' ); ?></a>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </sidebar>
      <section class="post-info">
        <a href="<?php the_permalink(); ?>">
          <h2 class="title"><?php the_title(); ?></h2>
          <date class="date"><?php the_time( get_option( 'date_format' ) ); ?></date>
          <div class="desc"><?php echo mb_substr(get_the_excerpt(), 0, 300, 'UTF-8'); ?>...</div>
        </a>
      </section>
    </div>
  </article>
<?php endwhile; ?>
</div>
<?php else: ?>
<div class="no-post">Nothing Here</div>
<?php endif; ?>

<?php get_footer(); ?>
