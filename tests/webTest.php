<?php

class webTest extends TestCase
{
  /**
  * @test
  */
  function a_request_was_loaded_successfully() :void
  {
    $response = $this->get('/faculty/nr_matthew.fritz/classes');
    //Loads all faculty classes route

    $this->assertEquals(200, $response->getStatus());
    //Checks to see if JSON->Status = 200
    //200 status code is JSON object, not to be confused with assertStatus(200)
  }

  function a_request_with_term_was_loaded_successfully() :void
  {
    $response = $this->get('/faculty/nr_matthew.fritz/classes/2173');
    //Loads Faculy classes route by term

    $this->assertEquals(200, $response->getStatus());
    //Checks to see if JSON->Status = 200
  }
}
