<?php snippet('header') ?>

    <section class="styletester-guide-wrapper" id="<?php echo $page->uid() ?>">

        <div class="styletester-info">
            <header class="styletester-header">
                <h1><?php echo $page->title()->html() ?></h1>
            </header>
            <div class="styletester-notes">
                <?php echo $page->text()->kirbytext() ?>
            </div>
        </div>

    </section>

<?php snippet('footer') ?>