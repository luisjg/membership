<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassMemberships extends Model
{
    protected $table = 'nemo.classMemberships';

//    public function scopeMembersId($query,$id)
//    {
//        return $query->where('members_id',$id);
//    }

    public function scopeInstructorRole($query)
    {
        return $query->where('role_position', 'Instructor');
    }

    public function scopeMembersId($query,$members)
    {
        return $query->where('members_id',$members);
    }

}