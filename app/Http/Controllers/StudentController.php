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
        $push = classes::classesId($classId)->get();
        array_push($result, $push);
      }

      return $result;
    }

}
