<?php

namespace App\Http\Controllers;

use App\User;
use App\ClassMemberships;


class FacultyController extends Controller {

    public function getClasses($email){
        $user = User::email($email)->first();

        $classes = ClassMemberships::membersId($user->user_id)
            ->instructorRole()
            ->pluck('classes_id')
            ->toArray();

        return $classes;
    }



}