<?php

use Carbon\Carbon;

class Post extends BaseModel {
    protected $table = 'posts';
    public static $rules = array(
    	'title' => 'required|max:100',
    	'body' => 'required'
    	);

    public function setTitlenameAttribute($value) {
    $this->attributes['title'] = strtolower($value);
    }

}