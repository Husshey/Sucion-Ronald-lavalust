<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
{
    $_SESSION['student_access'] = true; // grants access after visiting home page
    $data['page_title'] = 'My Student Homepage';
    $this->call->view('student/index', $data);
}

    public function profile()
    {
        $student = [
    'student_id' => '2024-00225',
    'name'       => 'Ronald Allan R. Sucion',
    'course'     => 'Bachelor of Science in Information Technology',
    'year'       => '3rd Year',
    'section'    => '3-F5',
    'email'      => 'razsucion99@gmail.com',
    'address'    => 'Poblacion 1 Sitio 6, Naujan, Oriental Mindoro',
    'hobbies'    => 'Code?, Gaming, I dunno what else...',
    'image'      => base_url('assets/img/profile.jpg') ];

        $this->call->view('student/profile', $student);
    }
}