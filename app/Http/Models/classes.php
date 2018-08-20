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
    protected $fillable = [
      'classes_id',
      'term_id',
      'session_code',
      'term',
      'class_number',
      'course_id',
      'subject',
      'catalog_number',
      'title',
      'description',
      'units',
      'section_number',
      'class_status',
    ];

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
