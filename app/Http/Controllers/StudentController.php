<?php

namespace App\Http\Controllers;
use App\Http\Models\People;
use App\Http\Models\classmemberships;

use Laravel\Lumen\Routing\Controller as BaseController;

class StudentController extends BaseController
{

    public function getStudentClasses($email)
    {
      $userId = People::email($email)->first()->individuals_id;
      $members = classMemberships::membersId($userId)->get();
      return $members;
    }

}
