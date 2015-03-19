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
    <div id="st-home-wrapper">
        <nav>
            <ul>
                <?php foreach($pages->filterBy('intendedTemplate','==', 'section') as $section): ?>
                    <li>
                        <a href="<?php echo $section->url() ?>"><?php echo $section->title()->html() ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</body>
</html>