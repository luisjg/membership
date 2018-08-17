<?php
/**
 * Created by PhpStorm.
 * User: nikit
 * Date: 8/17/2018
 * Time: 4:07 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class ClassInfo extends Model
{
    protected $table = "omar.classes";

    protected $fillable =[
        'classes_id',
        'term',
        'class_number',
        'subject',
        'catalog_number',
        'title',
        'description',
    ];

    protected $hidden = [
        'session_code',
        'term_id',
        'course_id',
        'units',
        'section_number',
        'class_status',
        'class_type',
        'enrollment_cap',
        'enrollment_total',
        'waitlist_cap',
        'waitlist_total',
    ];

}