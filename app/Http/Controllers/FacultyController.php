<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classes;
use App\Models\ClassInfo;
use App\Models\ClassMemberships;
use App\Http\Controllers\Controller;


class FacultyController extends Controller {

    public function getClasses($email){
        $user = User::email($email)->first();

        $classes = ClassMemberships::membersId($user->user_id)
            ->instructorRole()
            ->pluck('classes_id')
            ->toArray();
        //nemo.classMemberships, query by user_id, filter by role_position
        //and pluck classes_id

        $results = Classes::classesId($classes)
            ->get()
            ->toArray();
        //bedrock.events, query by classes, store every row in array

        $size = count($results);
        //total number of classes

        return $this->jsonResponse($results, $size);
        // return response with JSON header
    }

    public function getClassesWithTerm($term, $email){
      $user = User::email($email)->first();
      $classes = ClassMemberships::membersId($user->user_id)
          ->instructorRole()
          ->where('term_id', $term)
          ->pluck('classes_id')
          ->toArray();
          //nemo.classMemberships, query by user_id, filter by role_position,
          //filter by term_id, and pluck classes_id

      $data = Classes::classesId($classes)->get()->toArray();
      //bedrock.events, query by classes, store every row in array

      $size = count($data);
      //total number of classes

      return $this->jsonResponse($data, $size);
      //return response with JSON header
    }
}
