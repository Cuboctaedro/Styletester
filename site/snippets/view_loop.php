<section class="st-wrapper" id="<?php echo $page->parent()->uid() ?>">

    <?php if(param('headers') == 'show'  || !param('headers')): ?>
        <header class="st-header">
            <h<?php echo $page->parent()->depth() ?>><?php echo $page->parent()->title()->html() ?></h<?php echo $page->parent()->depth() ?>>
        </header>
    <?php endif; ?>

    <?php if(param('notes') == 'show'): ?>
        <div class="st-notes">
            <?php echo $page->parent()->text()->kirbytext() ?>
        </div>
    <?php endif ?>

    <?php if($page->parent()->hasSections()): ?>
        <?php foreach($page->parent()->sections() as $section): ?>
            <?php snippet('view_loop', array('page' => $section)) ?>
        <?php endforeach; ?>

    <?php elseif($page->parent()->hasHtmlcode()): ?>
        <div class="st-view">
            <?php foreach($page->parent()->htmlcode() as $htmlfile): ?>
                <?php echo $htmlfile->read() ?>
            <?php endforeach; ?>
        </div>

        <?php if(param('code') == 'show'): ?>
            <div class="st-code">
                <?php foreach($page->parent()->htmlcode() as $htmlfile): ?>
                    <?php echo kirbytag(array('code'  => $htmlfile->url(), 'lang'  => 'markup' )); ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    <?php endif; ?>

</section>