<?php
class SubcategoryPage extends StyletesterPage {
    public function elements() {
        return $this->children()->filterBy('intendedTemplate','==', 'element');
    }
    public function hasElements() {
        return $this->children()->filterBy('intendedTemplate','==', 'element')->count();
    }
    public function category() {
        return $this->parent();
    }
}