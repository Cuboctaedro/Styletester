<?php if($page->parent()->hasHtmlcode()): ?>
    <div id="<?php echo $page->parent()->category()->uid() ?>-<?php echo $page->parent()->subcategory()->uid() ?>-<?php echo $page->parent()->uid() ?>">
        <?php echo $page->parent()->htmlcode()->html() ?>
    </div>
<?php endif; ?>
