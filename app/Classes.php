<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'bedrock.events';

    public function scopeclassesId($query, $classes)
    {
      return $query->whereIn('entities_id', $classes);
    }

    public function getInfo()
    {
        return $this->hasOne('App\ClassInfo', 'classes_id', 'entities_id');
    }

    public function scopetermId($query, $term)
    {
      return $query->where('term_id', $term);
    }



}
