<?php

namespace App\Http\Controllers;

use App\User;


class FacultyController extends Controller {

    public function getClasses($email){
        $user = User::email($email)->first();

        $classes = ClassMemberships::memberId($user->user_id)
            ->instructorRole()
            ->pluck('classes_id');

        return $classes;
    }



}