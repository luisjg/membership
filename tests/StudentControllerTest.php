<?php

use App\Http\Controllers\StudentController;

class StudentControllerTest extends TestCase
{
    protected $studentController;
    protected $studentEmail = 'nr_seth.gray.74';

    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function setUp(){
        parent::setUp();
        $this->studentController = new StudentController;
    }

    /**
     * @test
     */

    public function testGetStudentClasses(){


        $response = $this->get('student/seth.gray.74/courses');

        $this->assertEquals(200, $response->status());

//        $response = $this->studentController->getStudentClasses($this->studentEmail);
//
//        $response->assertStatus(200);

//        $response = $this->get('student/seth.gray.74/courses');
//
//        $response->assertStatus(200);
    }



    public function testGetStudentClasseswithTerm(){

        $response = $this->get('student/nr_seth.gray.74/courses/2173');

        $this->assertEquals(200, $response->response->getData()->status);
    }
}