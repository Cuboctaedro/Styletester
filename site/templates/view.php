<?php snippet('view_header') ; ?>

<?php if ($page->isGuide()): ?>
    <?php if($page->parent()->hasCategories()): ?>
        <?php foreach($page->parent()->categories() as $category): ?>
            <?php snippet('view_category', array('page' => $category->view())); ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php elseif ($page->isCategory()): ?>
    <?php snippet('view_category'); ?>
<?php elseif ($page->isSubcategory()): ?>
    <?php snippet('view_subcategory'); ?>
<?php else: ?>
	<?php snippet('view_element'); ?>
<?php endif; ?>
<?php snippet('view_footer') ; ?>