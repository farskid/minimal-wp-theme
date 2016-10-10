# minimal-wp-theme
This is a minimal wordpress Theme

## Installation
Simply clone the repository by running `https://github.com/farskid/minimal-wp-theme` in your command line or manualy download the repository.

## Running
Once cloned successfully, There are 2 steps to complete the build process:

1. Run `npm install` (to install required nodejs modules)
2. Run `grunt` to convert sass to css, autoprefix the css, and also watch for changes.

## Note
The theme depends on installation of wordpress `Attachments` plugin. You can install it by searching and installing it through your admin panel or `wordpress.org` website.
If you do NOT want to use the plugin, Just remove below part from `category.php` and `single.php` and `page.php` files.
```
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
```
