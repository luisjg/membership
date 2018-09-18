<?php


use App\Http\Controllers\StudentController;
use App\routes\web;

class StudentControllerTest extends TestCase {
    
    /**
     * @test
     */
    public function testGetStudentClasses(){

        $response = $this->get('/student/nr_seth.gray.74/classes?api_key=SANDBOX');

        $this->assertEquals(200, $response->response->getData()->status);

    }

    public function testGetStudentClasseswithTerm(){

        $response = $this->get('/student/nr_seth.gray.74/classes/2157?api_key=SANDBOX');

        $this->assertEquals(200, $response->response->getData()->status);

    }
}