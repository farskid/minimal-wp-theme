<?php

  $avatar_setting = new avatar_setting();

  class avatar_setting {
    function avatar_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'admin_avatar', 'esc_attr' );
        add_settings_field('admin_avatar', '<label for="admin_avatar">'.__('Avatar URL' , 'admin_avatar' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
      $value = get_option( 'admin_avatar', '' );
      echo '<input style="display: block;width: 100%;height:36px;" type="url" id="admin_avatar" name="admin_avatar" value="' . $value . '"/>';
    }
  }

  $fullname_setting = new fullname_setting();

  class fullname_setting {
      function fullname_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
      }
    function register_fields() {
      register_setting( 'general', 'admin_fullname', 'esc_attr' );
      add_settings_field('admin_fullname', '<label for="admin_fullname">'.__('Full Name' , 'admin_fullname' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
      $value = get_option( 'admin_fullname', '' );
      echo '<input style="display: block;width: 100%;height:36px;" type="text" id="admin_fullname" name="admin_fullname" value="' . $value . '"/>';
    }
  }


?>
