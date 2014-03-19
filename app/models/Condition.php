<?php

class Condition extends \Eloquent {

    protected $fillable = ["name"];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}