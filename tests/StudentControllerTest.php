<?php

class StudentControllerTest extends TestCase {

    /**
     * @test
     */
    public function testGetStudentClasses() :void{

        $response = $this->get('/student/nr_seth.gray.74/classes?api_key=SANDBOX');

        $this->assertEquals(200, $response->getStatus());

    }

    public function testGetStudentClasseswithTerm() :void{

        $response = $this->get('/student/nr_seth.gray.74/classes/2157?api_key=SANDBOX');

        $this->assertEquals(200, $response->getStatus());

    }
}
