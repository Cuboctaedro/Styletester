  <nav role="navigation" id="st-menu-docs"  aria-labelledby="st-docs-desc">
    <h2>
      <a id="st-show-docs" href="#">
        <span id="st-docs-desc">About</span>
      </a>
    </h2>
    <ul>
      <?php foreach($site->index()->filterBy('template', 'default') as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>