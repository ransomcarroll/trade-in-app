<?php

class Club extends \Eloquent {
    protected $fillable = ["type","condition","brand","model","shaft","value","length","orientation"];

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