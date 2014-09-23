<?php

class City extends Eloquent {

    protected $table = 'city';

	public function state()
    {
        return $this->belongsTo('State');
    }
}