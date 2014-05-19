<?php

class Club extends \Eloquent {
    protected $fillable = ["club_type","club_condition","club_brand","model","shaft","value","length","orientation"];

    public function type()
    {
    	return $this->hasOne('Type','id','club_type');
    }

    public function brand()
    {
    	return $this->hasOne('Brand','id','club_brand');
    }

    public function condition()
    {
    	return $this->hasOne('Condition','id','club_condition');
    }
}