<?php
class HomePage extends Page {

    public function section() {
    	return $this->siblings()->filterBy('intendedTemplate','==', 'section')->first();
    }

}
