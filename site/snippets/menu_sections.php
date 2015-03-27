<nav role="navigation" id="styletester-menu-categories">
    <?php $guide = $pages->filterBy('intendedTemplate','==', 'guide')->findOpen() ?>
    <ul class="styletester-category-list">
        <?php $categories = $guide->categories() ?>
        <?php foreach ($categories as $category): ?>
        <li class="styletester-category-item">
            <a href="#<?php echo $category->uid() ?>"><?php echo $category->title()->html() ?></a>
            <ul class="styletester-subcategory-list">
                <?php $subcategories = $category->subcategories() ?>
                <?php foreach ($subcategories as $subcategory): ?>
                    <li class="styletester-subcategory-item">
                        <a href="#<?php echo $subcategory->category()->uid() ?>-<?php echo $subcategory->uid() ?>"><?php echo $subcategory->title()->html() ?></a>
                        <ul class="styletester-element-list">
                            <?php $elements = $subcategory->elements() ?>
                            <?php foreach ($elements as $element) : ?>
                                <li class="styletester-element-item">
                                    <a href="#<?php echo $element->category()->uid() ?>-<?php echo $element->subcategory()->uid() ?>-<?php echo $element->uid() ?>"><?php echo $element->title()->html() ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </ul>
</nav>
