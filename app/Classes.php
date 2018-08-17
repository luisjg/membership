<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'bedrock.events';

    protected $fillable =[
        'entities_id',
        'term_id',
        'pattern_number',
        'type',
        'label',
        'start_time',
        'end_time',
        'days',
        'from_date',
        'to_date',
        'location_type',
        'location',
        'is_byappointment',
        'is_walkin',
        'booking_url',
        'online_label',
        'online_url',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'description',

    ];

    public function scopeclassesId($query, $queryBuilder)
    {
        return $query->where('entities_id', $queryBuilder);
    }

    public function getInfo()
    {
        return $this->hasOne('App\ClassInfo', 'classes_id', 'entities_id');
    }

//    public function getInfo($query, $queryBuilder)
//    {
//       // $query->where('entities_id',$queryBuilder);
//
//        return $query->hasOne('App\ClassInfo', 'classes_id', $queryBuilder);
//    }

}