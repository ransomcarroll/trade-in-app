<?php

class Brands extends \Eloquent {
    protected $fillable = [];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}