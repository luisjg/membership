<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\People;
use App\Http\Models\classmemberships;
use App\Http\Models\Courses;


class StudentController extends Controller
{
    public function getStudentClasses($email)
    {
      $userId = People::email($email)->first()->individuals_id;
      $classesId = classMemberships::membersId($userId)
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

        $classesId = classMemberships::membersId($userId)
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
