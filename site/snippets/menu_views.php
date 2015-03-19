  <nav role="navigation" id="st-menu-views"  aria-labelledby="st-views-desc">
    <h2>
      <a id="st-show-viewoprtions" href="#">
        <span id="st-views-desc">View</span>
      </a>
    </h2>
    <ul>
      <li>
        <?php if(param('headers') == 'hide'): ?>
          <a id="st-show-headers" href="/headers:show">Show Headers</a>
        <?php else: ?>
          <a id="st-show-headers" href="/headers:hide">Hide Headers</a>
        <?php endif; ?>
      </li>
      <li>
        <?php if(param('code') == 'show'): ?>
          <a id="st-show-code" href="/code:hide">Hide Code</a>
        <?php else: ?>
          <a id="st-show-code" href="/code:show">Show Code</a>
        <?php endif; ?>
      </li>
      <li>
        <?php if(param('notes') == 'show'): ?>
          <a id="st-show-notes" href="/notes:hide">Hide Notes</a>
        <?php else: ?>
          <a id="st-show-notes" href="/notes:show">Show Notes</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>