<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $page->title()->html() ?></title>

  <?php $opentester = $pages->filterBy('intendedTemplate', 'tester')->findOpen(); ?>

  <?php if($opentester->hasCsscode()): ?>
    <?php foreach($opentester->csscode() as $stylefile): ?>
      <link rel="stylesheet" href="<?php echo $stylefile->url() ?>" media="all" />
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if($opentester->hasGroups()): ?>
    <?php foreach ($opentester->groups() as $group): ?>
      <?php if($group->hasCsscode()): ?>
        <?php foreach($group->csscode() as $stylefile): ?>
          <link rel="stylesheet" href="<?php echo $stylefile->url() ?>" media="all" />
        <?php endforeach; ?>
      <?php endif;?>
    <?php endforeach; ?>
  <?php endif;?>

  <?php if($opentester->hasSections()): ?>
    <?php foreach ($opentester->sections() as $section): ?>
      <?php if($section->hasCsscode()): ?>
        <?php foreach($section->csscode() as $stylefile): ?>
          <link rel="stylesheet" href="<?php echo $stylefile->url() ?>" media="all" />
        <?php endforeach; ?>
      <?php endif;?>
    <?php endforeach; ?>
  <?php endif;?>

  <?php if($opentester->hasElements()): ?>
    <?php foreach ($opentester->elements() as $element): ?>
      <?php if($element->hasCsscode()): ?>
        <?php foreach($element->csscode() as $stylefile): ?>
          <link rel="stylesheet" href="<?php echo $stylefile->url() ?>" media="all" />
        <?php endforeach; ?>
      <?php endif;?>
    <?php endforeach; ?>
  <?php endif;?>

</head>
<body>