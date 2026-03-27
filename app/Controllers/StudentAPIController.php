<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class StudentApiController extends ResourceController
{
    protected $modelName = 'App\Models\StudentModel';
    protected $format    = 'json'; // This ensures the output is always JSON

    public function index()
    {
        // Fetch all students (excluding soft-deleted ones)
        $students = $this->model->findAll();
        
        // Return the data as a JSON response
        return $this->respond($students);
    }
}