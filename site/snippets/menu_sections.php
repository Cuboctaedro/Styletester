<?php if(!isset($subpages)) $subpages = $pages->filterBy('intendedTemplate','==', 'section') ?>
<ul>
  <?php foreach($subpages->visible() as $p): ?>
  <li class="depth-<?php echo $p->depth() ?>">
    <a<?php e($p->isActive(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    <?php if($p->hasSections()): ?>
    <?php snippet('menu_sections', array('subpages' => $p->sections())) ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>