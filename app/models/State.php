<?php

class State extends Eloquent {

    protected $table = 'state';

	public function country()
    {
        return $this->belongsTo('Country');
    }
}