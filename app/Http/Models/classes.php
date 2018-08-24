<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{

    protected $table = 'omar.classes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'class_type',
      'enrollment_cap',
      'enrollment_total',
      'waitlist_cap',
      'waitlist_total'
    ];

    public function scopeClassesId($query, $classesId)
    {
      return $query->where('classes_id',$classesId);
    }

}
