<?php

class Status extends Eloquent {

	public function statuses() {
		return $this->hasOne('Application');
	}

}