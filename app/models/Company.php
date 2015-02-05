<?php

class Company extends Eloquent {
	
	public function names() {
		return $this->hasMany('Application');
	}

}