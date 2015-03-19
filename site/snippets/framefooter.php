  <?php $opentester = $pages->filterBy('intendedTemplate', 'tester')->findOpen(); ?>

  <?php if($opentester->hasJscode()): ?>
    <?php foreach($opentester->jscode() as $jsfile): ?>
      <script src="<?php echo $jsfile->url() ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if($opentester->hasGroups()): ?>
    <?php foreach ($opentester->groups() as $group): ?>
      <?php if($group->hasJscode()): ?>
        <?php foreach($group->jscode() as $jsfile): ?>
          <script src="<?php echo $jsfile->url() ?>"></script>
        <?php endforeach; ?>
      <?php endif;?>
    <?php endforeach; ?>
  <?php endif;?>

  <?php if($opentester->hasSections()): ?>
    <?php foreach ($opentester->sections() as $section): ?>
      <?php if($section->hasJscode()): ?>
        <?php foreach($section->jscode() as $jsfile): ?>
          <script src="<?php echo $jsfile->url() ?>"></script>
        <?php endforeach; ?>
      <?php endif;?>
    <?php endforeach; ?>
  <?php endif;?>

  <?php if($opentester->hasElements()): ?>
    <?php foreach ($opentester->elements() as $element): ?>
      <?php if($element->hasJscode()): ?>
        <?php foreach($element->jscode() as $jsfile): ?>
          <script src="<?php echo $jsfile->url() ?>"></script>
        <?php endforeach; ?>
      <?php endif;?>
    <?php endforeach; ?>
  <?php endif;?>

</body>
</html>