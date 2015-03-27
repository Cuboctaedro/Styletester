<?php snippet('header') ?>

  <main id="styletester-doc-main" role="main">

    <div class="styletester-doc-text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>