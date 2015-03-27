<?php
class StyletesterPage extends Page {
    public function hasText() {
        return $this->text()->length();
    }
    public function view() {
        return $this->children()->filterBy('intendedTemplate','==', 'view')->first();
    }
}