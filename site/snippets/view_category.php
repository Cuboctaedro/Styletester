    <?php if($page->parent()->hasSubcategories()): ?>
        <?php foreach($page->parent()->subcategories() as $subcategory): ?>
            <?php snippet('view_subcategory', array('page' => $subcategory->view())); ?>
        <?php endforeach; ?>
    <?php endif; ?>