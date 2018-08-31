<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\People;
use App\Http\Models\classmemberships;
use App\Http\Models\classes;

use Laravel\Lumen\Routing\Controller as BaseController;

class StudentController extends Controller
{

    public function getStudentClasses($email)
    {
      $userId = People::email($email)->first()->individuals_id;
      $classesId = classMemberships::membersId($userId)->pluck('classes_id');
      $data = [];

      foreach($classesId as $classId)
      {
        $push = classes::classesId($classId)->first();
        array_push($data, $push);
      }
      $size = count($data);

      return $this->jsonResponse($data, $size);
    }

}
