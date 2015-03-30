<!DOCTYPE html>
<html lang="en">
<head>

<?php $guide = $pages->filterBy('intendedTemplate','==', 'guide')->findOpen() ?>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo js('assets/js/uilang.js') ?>
  <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Fira+Mono' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo $site->url() ?>/assets/font-awesome/css/font-awesome.min.css">

<!--LOAD CUSTOM STYLEGUIDE LOOK-->
<?php if($guide->hasLook()): ?>
  <?php foreach($guide->look()->yaml() as $stylefile): ?>
    <link href='<?php echo $site->url() ?>/<?php echo $stylefile['path'] ?>' rel='stylesheet' type='text/css'>
  <?php endforeach; ?>
<?php else: ?>
  <?php echo css('assets/css/ststyles.css') ?>
<?php endif; ?>

<!--LOAD CUSTOM JS-->
<?php if($guide->hasJsinheader()): ?>
  <?php foreach($guide->headerjs()->yaml() as $jsfile): ?>
    <script src="<?php echo $site->url() ?>/<?php echo $jsfile['path'] ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>

<!--LOAD CUSTOM CSS-->
<?php if($guide->hasCss()): ?>
  <?php foreach($guide->stylefiles()->yaml() as $stylefile): ?>
    <link href='<?php echo $site->url() ?>/<?php echo $stylefile['path'] ?>' rel='stylesheet' type='text/css'>
  <?php endforeach; ?>
<?php endif; ?>

</head>

<body id="styletester-body">

  <header id="styletester-site-header">
    <div id="styletester-link-home">
      <a href="<?php echo $site->url() ?>"><i class="fa fa-home fa-lg"></i></a>
    </div>
    <h1 id="styletester-link-tester">
      <a href="<?php echo $guide->url() ?>"><?php echo $guide->title()->html() ?></a>
    </h1>
    <div id="styletester-link-menu">
      <a id="styletester-show" href="#"><i class="fa fa-bars"></i> <span>Menu</span></a>
    </div>
    <div id="styletester-link-login">
      <a id="styletester-login" href="<?php echo $site->url() ?>/panel"><i class="fa fa-sign-in"></i> <span>Login</span></a>
    </div>

    <?php if($guide->hasDocs()): ?>
      <div id="styletester-docs-link">
        <h4>
          <?php $docsbase = $pages->findOpen()->children()->filterBy('intendedTemplate','==', 'docs')->first() ?>
          <a id="styletester-show-docs" href="<?php echo $docsbase->url() ?>"><i class="fa fa-file-text"></i> <span><?php echo $docsbase->title()->html() ?></span></a>
        </h4>
      </div>
      <?php endif; ?>
    <nav id="styletester-sizes-link">
      <?php snippet('menu_sizes') ?>
    </nav>
  </header>

  <div id="styletester-site-wrapper">

    <div id="styletester-menu-wrapper">
      <?php if($page->intendedTemplate() == "docs"): ?>
      <nav role="navigation" id="styletester-menu-docs">
        <?php snippet('menu_docs_loop') ?>
      </nav>
      <?php else: ?>
        <?php snippet('menu_sections') ?>
      <?php endif; ?>
    </div>

    <div id="styletester-content-wrapper">
