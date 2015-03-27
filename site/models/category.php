<?php
class CategoryPage extends StyletesterPage {
    public function subcategories() {
        return $this->children()->filterBy('intendedTemplate','==', 'subcategory');
    }
    public function hasSubcategories() {
        return $this->children()->filterBy('intendedTemplate','==', 'subcategory')->count();
    }
}