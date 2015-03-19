<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo js('assets/js/uilang.js') ?>
  <?php echo css('assets/css/ststyles.css') ?>

</head>
<body id="st-body">

  <header id="st-site-header">
    <?php snippet('menu_sections') ?>
    <?php snippet('menu_views') ?>
    <?php snippet('menu_sizes') ?>
    <?php snippet('menu_docs') ?>
  </header>

  <div id="st-iframe-wrapper">