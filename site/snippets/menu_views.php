  <nav role="navigation" id="st-menu-views"  aria-labelledby="st-views-desc">
    <h2>
      <a id="st-show-viewoprtions" href="#">
        <span id="st-views-desc">View</span>
      </a>
    </h2>
    <ul>
      <li>
        <?php if(kirby()->request()->params()->headers() == 'hide'): ?>
          <a id="st-show-headers" href="<?php echo $page->url() ?>/headers:show">Show Headers</a>
        <?php else: ?>
          <a id="st-show-headers" href="<?php echo $page->url() ?>/headers:hide">Hide Headers</a>
        <?php endif; ?>
      </li>
      <li>
        <?php if(kirby()->request()->params()->code() == 'show'): ?>
          <a id="st-show-code" href="<?php echo $page->url() ?>/code:hide">Hide Code</a>
        <?php else: ?>
          <a id="st-show-code" href="<?php echo $page->url() ?>/code:show">Show Code</a>
        <?php endif; ?>
      </li>
      <li>
        <?php if(kirby()->request()->params()->notes() == 'show'): ?>
          <a id="st-show-notes" href="<?php echo $page->url() ?>/notes:hide">Hide Notes</a>
        <?php else: ?>
          <a id="st-show-notes" href="<?php echo $page->url() ?>/notes:show">Show Notes</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>