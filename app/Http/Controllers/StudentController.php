<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\People;
use App\Models\Classmemberships;
use App\Models\Courses;

class StudentController extends Controller
{
    public function getStudentClasses($email)
    {
      $userId = People::email($email)->first()->individuals_id;
      $classesId = ClassMemberships::membersId($userId)
            ->pluck('classes_id')
            ->toArray();

      $results = Courses::classesId($classesId)
            ->get()
            ->toArray();

      $size = count($results);

      return $this->jsonResponse($results, $size);
    }

    public function getStudentClasseswithTerms($term, $email)
    {
        $userId = People::email($email)->first()->individuals_id;

        $classesId = ClassMemberships::membersId($userId)
            ->where('term_id', $term)
            ->pluck('classes_id')
            ->toArray();

        $results = Courses::ClassesId($classesId)
            ->get()
            ->toArray();

        $size = count($results);

        return $this->jsonResponse($results, $size);
    }

}
