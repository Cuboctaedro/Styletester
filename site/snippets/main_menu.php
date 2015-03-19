<nav role="navigation" id="st-main-menu">

<?php if($pages->findOpen()->intendedTemplate() == "tester"): ?>
  <?php $opentester = $pages->findOpen() ?>
<?php else: ?>
  <?php $opentester = $pages->filterBy(intendedTemplate() == "tester")->first(); ?>
<?php endif;?>

  <a href="" id="st-show-menu">Menu</a>
  <ul class="st-top-menu">

    <li class="st-open-tester">
      <a href="<?php echo $opentester->url() ?>"><?php echo $opentester->title()->html() ?></a>
      <?php if($pages->filterBy('intendedTemplate', 'tester')->count() > 1): ?>
        <ul class="st-second-menu">
          <?php foreach ($pages->filterBy('intendedTemplate', 'tester')->not($opentester) as $tester): ?>
            <li>
              <a href="<?php echo $tester->url() ?>"><?php echo $tester->title()->html() ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </li>

    <?php if($opentester->hasGroups()): ?>

      <?php foreach ($opentester->groups() as $group): ?>

        <li class="st-group-menu">

          <?php if($group->hasSections()): ?>

              <a class="st-show-second" href="#"><?php echo $group->title()->html() ?></a>
              <ul class="st-second-menu">
                <li>
                  <a href="<?php echo $group->url() ?>">All</a>
                </li>
                <?php foreach ($group->sections() as $section): ?>

                  <?php if($section->hasElements()): ?>
                    <li class="st-section-menu">
                      <a class="st-show-third" href="#"><?php echo $section->title()->html() ?></a>
                      <ul class="st-third-menu">
                        <li>
                          <a href="<?php echo $section->url() ?>">All</a>
                        </li>
                        <?php foreach ($section->elements() as $element): ?>
                          <li>
                            <a href="<?php echo $element->url() ?>"><?php echo $element->title()->html() ?></a>
                          </li>
                        <?php endforeach; ?>
                      </ul>

                  <?php else: ?>
                    <li>
                      <a href="<?php echo $section->url() ?>"><?php echo $section->title()->html() ?></a>
                    </li>
                  <?php endif; ?>

                <?php endforeach; ?>
              </ul>

          <?php else: ?>

            <a href="<?php echo $group->url() ?>"><?php echo $group->title()->html() ?></a>

          <?php endif; ?>

        </li>

      <?php endforeach; ?>

    <?php endif; ?>

  </ul>

</nav>