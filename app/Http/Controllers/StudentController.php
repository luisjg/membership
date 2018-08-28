<?php

namespace App\Http\Controllers;
use App\Http\Models\People;
use App\Http\Models\classmemberships;
use App\Http\Models\classes;

use Laravel\Lumen\Routing\Controller as BaseController;

class StudentController extends BaseController
{

    public function getStudentClasses($email)
    {
      $userId = People::email($email)->first()->individuals_id;
      $classesId = classMemberships::membersId($userId)->pluck('classes_id');
      $result = [];

      foreach($classesId as $classId)
      {
        $push = classes::classesId($classId)->first();
        array_push($result, $push);
      }

      return $result;
    }

    public function getStudentClasseswithTerms($term, $email)
    {
        $userId = People::email($email)->first()->individuals_id;

        $classesId = classMemberships::membersId($userId)->pluck('classes_id');

        $result = [];

        foreach($classesId as $classId)
        {
            $temp = classes::ClassesId($classId)
                ->termId($term)
                ->first();
            if($temp != null){
                array_push($result, $temp);
            }
        }
        return $result;
    }

}
