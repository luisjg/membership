<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
  public function jsonResponse($data, $size){
    $arr = [
      'success' => "true",
      'status' => 200,
      'api' => "membership",
      'version' => "1.0",
      'collection' => "classes",
      'classes_count' => $size,
      'list' => $data
    ];

    return response()->json($arr);
  }
}
