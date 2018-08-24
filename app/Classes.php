<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'bedrock.events';

    public function scopeclassesId($query, $queryBuilder)
    {
        return $query->where('entities_id', $queryBuilder);
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
