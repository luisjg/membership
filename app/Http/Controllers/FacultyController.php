<?php

namespace App\Http\Controllers;

use App\User;
use App\Classes;
use App\ClassInfo;
use App\ClassMemberships;


class FacultyController extends Controller {

    public function getClasses($email){
        $user = User::email($email)->first();

        $classes = ClassMemberships::membersId($user->user_id)
            ->instructorRole()
            ->pluck('classes_id')
            ->toArray();

        $results = [];

        foreach($classes as $class){
            $queryBuilder = "{$class}";
            $temp = Classes::classesId($queryBuilder)
               // ->with('getInfo')   /* commenting out because it is unnecessary extra information*/
                ->get();


            array_push($results, $temp);
        }

        return $results;
    }



}