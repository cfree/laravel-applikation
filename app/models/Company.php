<?php

class Company extends Eloquent {
	
	public function names() {
		return $this->hasOne('Application');
	}

}