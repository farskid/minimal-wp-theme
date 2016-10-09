<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php if (is_home()): bloginfo('name'); elseif (is_category()): single_cat_title(); else: the_title(); endif; ?></title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css">
</head>
<body class="<?php if (is_home()): ?>is-home<?php endif; ?>">
  <div class="site-container">
