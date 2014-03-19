<?php

class Type extends \Eloquent {

    protected $fillable = ["name"];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}