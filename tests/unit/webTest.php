<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Controller;
use App\routes\web;

class webTest extends TestCase
{
  /**
  * @test
  */
  function a_request_was_loaded_successfully()
  {
    $FacultyController = new FacultyController;
    $Controller = new Controller;

    $response = $this->get('/faculty/matthew.fritz/classes');

    $this->assertEquals(200, $response->response->getData()->status);

  }
}
