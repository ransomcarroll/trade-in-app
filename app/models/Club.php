<?php

class Club extends \Eloquent {
    protected $fillable = [];

    public function type()
    {
    	return $this->hasOne('Type');
    }

    public function brand()
    {
    	return $this->hasOne('Brand');
    }

    public function condition()
    {
    	return $this->hasOne('Condition');
    }
}