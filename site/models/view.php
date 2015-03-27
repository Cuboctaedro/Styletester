<?php
class ViewPage extends StyletesterPage {
    public function isGuide() {
    	if ($this->parent->intendedTemplate() == 'guide') {
    		return true ;
    	} else {
        	return false ;
        }
    }
    public function isCategory() {
    	if ($this->parent->intendedTemplate() == 'category') {
    		return true ;
    	} else {
        	return false ;
        }
    }
    public function isSubcategory() {
    	if ($this->parent->intendedTemplate() == 'subcategory') {
    		return true ;
    	} else {
        	return false ;
        }
    }
    public function isElement() {
    	if ($this->parent->intendedTemplate() == 'element') {
    		return true ;
    	} else {
        	return false ;
        }
    }
}