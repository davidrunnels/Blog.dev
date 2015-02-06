<?php

use Carbon\Carbon;

class Post extends BaseModel {
    protected $table = 'posts';
    public static $rules = array(
    	'title' => 'required|max:100',
    	'body' => 'required'
    	);

    public function setTitleAttribute($value) {
    $this->attributes['title'] = ($value);
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function uploadFile($file) 
    {
        $uploadsPath = public_path() . '/uploads';
        $fileName =$this->id . '-' . $file->getClientOriginalName();
                
        $file->move($uploadsPath, $fileName);

        $this->img_url = '/uploads/' . $fileName;

        $this->save();
    }

}