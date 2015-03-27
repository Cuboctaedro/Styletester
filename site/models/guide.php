<?php
class GuidePage extends StyletesterPage {
    public function categories() {
        return $this->children()->filterBy('intendedTemplate','==', 'category');
    }
    public function hasCategories() {
        return $this->children()->filterBy('intendedTemplate','==', 'category')->count();
    } 
}