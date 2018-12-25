<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exits){
            $this->attributes['slug'] = str_slug($value);
        }
    }
}
