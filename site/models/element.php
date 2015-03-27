<?php
class ElementPage extends StyletesterPage {
    public function hasCsscode() {
        return $this->files()->filterBy('extension','==', 'css')->count();
    }
    public function csscode() {
        return $this->files()->filterBy('extension','==', 'css');
    }
    public function hasJscode() {
        return $this->files()->filterBy('extension','==', 'js')->count();
    }
    public function jscode() {
        return $this->files()->filterBy('extension','==', 'js');
    }
    public function hasHtmlcode() {
        return $this->htmlcode()->length();
    }
    public function category() {
        return $this->parent()->parent();
    }
    public function subcategory() {
        return $this->parent();
    }
}