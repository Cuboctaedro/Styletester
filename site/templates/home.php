<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/ststyles.css') ?>

</head>
<body id="styletester-body" class="styletester-home">
    <div id="styletester-home-wrapper">
      <div id="styletester-site-title">
        <h1><?php echo $site->title()->html() ?></h1>
      </div>
      <div id="styletester-site-description">
        <?php echo $site->description()->html() ?>
      </div>
      <nav id="styletester-site-navigation">
        <ul>
          <?php foreach($pages->visible()->filterBy('intendedTemplate','==', 'guide') as $guide): ?>
            <li>
              <a href="<?php echo $guide->url() ?>"><?php echo $guide->title()->html() ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
</body>
</html>