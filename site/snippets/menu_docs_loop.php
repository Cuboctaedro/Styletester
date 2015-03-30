<?php if(!isset($subpages)) $subpages = $pages->findOpen()->children()->filterBy('intendedTemplate','==', 'docs')->first()->children() ?>
<ul>
  <?php foreach($subpages->visible() AS $p): ?>
  <li class="depth-<?php echo $p->depth() ?>">
    <a<?php e($p->isActive(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    <?php if($p->hasChildren()): ?>
    <?php snippet('menu_docs_loop', array('subpages' => $p->children())) ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>