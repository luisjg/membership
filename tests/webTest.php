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
    $response = $this->get('/faculty/matthew.fritz/classes');
    //Loads all faculty classes route

    $this->assertEquals(200, $response->response->getData()->status);
    //Checks to see if JSON->Status = 200
    //200 status code is JSON object, not to be confused with assertStatus(200)
  }

  function a_request_with_term_was_loaded_successfully()
  {
    $response = $this->get('/faculty/matthew.fritz/classes/2173');
    //Loads Faculy classes route by term

    $this->assertEquals(200, $response->response->getData()->status);
    //Checks to see if JSON->Status = 200
  }
}
