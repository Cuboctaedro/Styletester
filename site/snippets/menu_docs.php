<?php $docsbase = $pages->findOpen()->children()->filterBy('intendedTemplate','==', 'docs')->first() ?>
    <h4>
      <a id="styletester-show-docs" href="#"><i class="fa fa-file-text"></i> <span><?php echo $docsbase->title()->html() ?></span></a>
    </h4>
    <ul id="styletester-menu-docs">
      <?php foreach($docsbase->children()->visible() as $doc): ?>
        <li>
          <a href="<?php echo $doc->url() ?>"><?php echo $doc->title()->html() ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
