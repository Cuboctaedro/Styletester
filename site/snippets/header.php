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

<?php if($guide->hasDocs()): ?>
<code>
clicking on "#styletester-show-sizesoprtions" toggles class "visible" on "#styletester-menu-sizes"
clicking on "#styletester-sizes-xs" toggles class "styletester-xs" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-xs" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-s" toggles class "styletester-s" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-s" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-m" toggles class "styletester-m" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-m" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-l" toggles class "styletester-l" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-l" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xl" toggles class "styletester-xl" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-f" removes class "styletester-xl" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-f" toggles class "styletester-f" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl" removes class "styletester-f" on "#styletester-content-wrapper"
clicking on ".styletester-code-button" toggles class "visible" on "target"
clicking on "#styletester-show" toggles class "showmenu" on "#styletester-site-wrapper"
clicking on "#styletester-show-sizesoprtions" removes class "visible" on "#styletester-menu-docs"
clicking on "#styletester-show-docs" toggles class "visible" on "#styletester-menu-docs"
clicking on "#styletester-show-docs" removes class "visible" on "#styletester-menu-sizes"
</code>
<?php else: ?>
<code>
clicking on "#styletester-show-sizesoprtions" toggles class "visible" on "#styletester-menu-sizes"
clicking on "#styletester-sizes-xs" toggles class "styletester-xs" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-xs" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-s" toggles class "styletester-s" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-s" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-m" toggles class "styletester-m" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-m" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-l" toggles class "styletester-l" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-l" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xl" toggles class "styletester-xl" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-f" removes class "styletester-xl" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-f" toggles class "styletester-f" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl" removes class "styletester-f" on "#styletester-content-wrapper"
clicking on ".styletester-code-button" toggles class "visible" on "target"
clicking on "#styletester-show" toggles class "showmenu" on "#styletester-site-wrapper"
</code>
<?php endif; ?>
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
    <nav id="styletester-controls-wrapper">
      <?php snippet('menu_sizes') ?>
      <?php if($guide->hasDocs()): ?>
        <?php snippet('menu_docs') ?>
      <?php endif; ?>
    </nav>
  </header>

  <div id="styletester-site-wrapper">

    <div id="styletester-menu-wrapper">
      <?php snippet('menu_sections') ?>
    </div>

    <div id="styletester-content-wrapper">


