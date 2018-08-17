<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassMemberships extends Model
{
    protected $table = 'nemo.classMemberships';

    protected $fillable = [
        'classes_id',
        'members_id',
        'email',
        'role_position',
    ];

    protected $hidden = [
        'term_id',
        'term',
        'class_number',
        'members_id',
        'members_uid',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'role_position',
        'ad_hoc_member',
        'confidential',
        'member_status',
    ];

    public function scopeMembersId($query,$id)
    {
        return $query->where('members_id',$id);
    }

    public function scopeInstructorRole($query)
    {
        return $query->where('role_position', 'Instructor');
    }
}