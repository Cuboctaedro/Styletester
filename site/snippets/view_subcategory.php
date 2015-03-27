    <?php if($page->parent()->hasElements()): ?>
        <?php foreach($page->parent()->elements() as $element): ?>
            <?php snippet('view_element', array('page' => $element->view())); ?>
        <?php endforeach; ?>
    <?php endif; ?>
