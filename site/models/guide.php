<?php
class GuidePage extends StyletesterPage {
    public function categories() {
        return $this->children()->visible()->filterBy('intendedTemplate','==', 'category');
    }
    public function hasCategories() {
        return $this->children()->visible()->filterBy('intendedTemplate','==', 'category')->count();
    }
    public function hasDocs() {
        return $this->children()->visible()->filterBy('intendedTemplate','==', 'docs')->count();
    }
    public function hasLook() {
        return $this->look()->length();
    }
    public function hasCss() {
        return $this->stylefiles()->length();
    }
    public function hasJsinheader() {
        return $this->headerjs()->length();
    }
    public function hasJsinfooter() {
        return $this->footerjs()->length();
    }
}