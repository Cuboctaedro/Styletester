<?php
class CategoryPage extends StyletesterPage {
    public function subcategories() {
        return $this->children()->visible()->filterBy('intendedTemplate','==', 'subcategory');
    }
    public function hasSubcategories() {
        return $this->children()->visible()->filterBy('intendedTemplate','==', 'subcategory')->count();
    }
}