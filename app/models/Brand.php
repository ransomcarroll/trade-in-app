<?php

class Brand extends \Eloquent {

    protected $fillable = ["name"];
    protected $table = "club_brands";

    public function club()
    {
    	return $this->belongsToMany('Club');
    }
}