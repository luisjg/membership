<?php

namespace App\Http\Controllers;

use App\User;
use App\Classes;
use App\ClassInfo;
use App\ClassMemberships;
use App\Http\Controllers\Controller;


class FacultyController extends Controller {

    public function getClasses($email){
        $user = User::email($email)->first();

        $classes = ClassMemberships::membersId($user->user_id)
            ->instructorRole()
            ->pluck('classes_id')
            ->toArray();

        $results = Classes::classesId($classes)
            ->get()
            ->toArray();

        $size = count($results);

        return $this->jsonResponse($results, $size);
    }

    public function getClassesWithTerm($term, $email){
      $user = User::email($email)->first();
      $classes = ClassMemberships::membersId($user->user_id)
          ->instructorRole()
          ->where('term_id', $term)
          ->pluck('classes_id')
          ->toArray();

      $data = Classes::classesId($classes)->get()->toArray();

      $size = count($data);
      return $this->jsonResponse($data, $size);
    }
}
