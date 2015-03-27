<?php snippet('header') ?>

    <section class="styletester-guide-wrapper" id="<?php echo $page->uid() ?>">

        <div class="styletester-info">
            <header class="styletester-header">
                <h1><?php echo $page->title()->html() ?></h1>
            </header>

            <div class="styletester-notes">
                <?php echo $page->text()->kirbytext() ?>
            </div>

            <a class="styletester-button" href="<?php echo $page->view()->url() ?>" target="_blank"><i class="fa fa-external-link"></i> Raw View</a>
        </div>

        <?php if($page->hasCategories()): ?>
            <?php foreach($page->categories() as $category): ?>
                <?php snippet('loop_category', array('page' => $category)); ?>
            <?php endforeach; ?>
        <?php endif; ?>

    </section>
    <a id="styletester-to-top" href="#styletester-content-wrapper">Top <i class="fa fa-arrow-up"></i></a>
<?php snippet('footer') ?>