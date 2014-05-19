<?php

class Condition extends \Eloquent {

    protected $fillable = ["name"];
    protected $table = "club_conditions";

    public function club()
    {
    	return $this->belongsToMany('Club');
    }
}