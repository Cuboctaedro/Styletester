<?php
class StyletesterPage extends Page {
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
        return $this->files()->filterBy('extension','==', 'html')->count();
    }
    public function htmlcode() {
        return $this->files()->filterBy('extension','==', 'html');
    }
    public function hasText() {
        return $this->text()->length();
    }
    public function view() {
        return $this->children()->filterBy('intendedTemplate','==', 'view')->first();
    }
    public function sections() {
        return $this->index()->filterBy('intendedTemplate','==', 'section');
    }
    public function hasSections() {
        return $this->index()->filterBy('intendedTemplate','==', 'section')->count();
    }
}