
    <section class="styletester-category-wrapper" id="<?php echo $page->uid() ?>">

        <div class="styletester-info">
            <header class="styletester-header">
                <h2><?php echo $page->title()->html() ?></h2>
            </header>
            <div class="styletester-notes">
                <?php echo $page->text()->kirbytext() ?>
            </div>
            <a class="styletester-button" href="<?php echo $page->view()->url() ?>" target="_blank"><i class="fa fa-external-link"></i> Raw View</a>
        </div>

    <?php if($page->hasSubcategories()): ?>
        <?php foreach($page->subcategories() as $subcategory): ?>
            <?php snippet('loop_subcategory', array('page' => $subcategory)); ?>
        <?php endforeach; ?>
    <?php endif; ?>

    </section>
