<?php
class ElementPage extends StyletesterPage {
    public function hasHtmlcode() {
        return $this->htmlcode()->length();
    }
    public function category() {
        return $this->parent()->parent();
    }
    public function subcategory() {
        return $this->parent();
    }
    public function hasRelated() {
        return $this->related()->length();
    }
}