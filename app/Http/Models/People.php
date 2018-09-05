<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $table = 'fresco.people';
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
      'email',
      'deceased',
      'parent_entities_id',
      'entity_type',
      'gender',
      'biography',
      'rank',
      'appt_year',
    ];

    public function scopeEmail($query,$email)
    {
        return $query->where('email',$email.'@my.csun.edu');
    }

}
