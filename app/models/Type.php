<?php

class Type extends \Eloquent {

    protected $fillable = ["name"];
    protected $table = "club_types";

    public function club()
    {
    	return $this->belongsToMany('Club');
    }

}