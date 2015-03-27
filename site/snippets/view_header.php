<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $page->parent()->title()->html() ?></title>

    <?php $guide = $pages->filterBy('intendedTemplate','==', 'guide')->findOpen() ?>

<!--LOAD CUSTOM JS-->
<?php if($guide->headerjs()): ?>
  <?php foreach($guide->headerjs()->yaml() as $jsfile): ?>
    <script src="<?php echo $site->url() ?>/<?php echo $jsfile['path'] ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>
<!--LOAD CUSTOM CSS-->
<?php if($guide->stylefiles()): ?>
  <?php foreach($guide->stylefiles()->yaml() as $stylefile): ?>
    <link href='<?php echo $site->url() ?>/<?php echo $stylefile['path'] ?>' rel='stylesheet' type='text/css'>
  <?php endforeach; ?>
<?php endif; ?>

</head>
<body>