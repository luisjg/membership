<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class classMemberships extends Model
{

    protected $table = 'nemo.classMemberships';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'classes_id',
      'term_id',
      'term',
      'class_number',
      'members_id',
      'members_uid',
      'ad_hoc_member',
      'confidential',
      'member_status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'first_name',
      'last_name',
      'middle_name',
      'email',
      'role_position',

    ];

    public function scopeMembersId($query,$members)
    {
        return $query->where('members_id',$members);
    }

}
