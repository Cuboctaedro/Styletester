
    <section class="styletester-subcategory-wrapper" id="<?php echo $page->category()->uid() ?>-<?php echo $page->uid() ?>">

        <div class="styletester-info">
            <header class="styletester-header">
                <h3><?php echo $page->title()->html() ?></h3>
            </header>
            <div class="styletester-notes">
                <?php echo $page->text()->kirbytext() ?>
            </div>
            <a class="styletester-button" href="<?php echo $page->view()->url() ?>" target="_blank"><i class="fa fa-external-link"></i> Raw View</a>
        </div>

    <?php if($page->hasElements()): ?>
        <?php foreach($page->elements() as $element): ?>
            <?php snippet('loop_element', array('page' => $element)); ?>
        <?php endforeach; ?>
    <?php endif; ?>

    </section>
