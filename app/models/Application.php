<?php

class Application extends Eloquent {

    public function company() {
        return $this->belongsTo('Company');
    }

    public function status() {
        return $this->belongsTo('Status');
    }
}
