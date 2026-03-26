<?php
namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
public function index()
    {
        $model = new \App\Models\StudentModel();
        
        // Grab the search keyword from the URL (e.g., ?keyword=John)
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            // Filter the results if a keyword exists
            $data['students'] = $model->like('name', $keyword)
                                      ->orLike('email', $keyword)
                                      ->orLike('course', $keyword)
                                      ->findAll();
        } else {
            // Otherwise, get all students
            $data['students'] = $model->findAll();
        }

        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $model = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ];
        $model->insert($data);
        return redirect()->to('/students');
    }

    public function delete($id = null)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/students');
    }

    public function edit($id = null)
    {
        $model = new \App\Models\StudentModel();
        $data['student'] = $model->find($id);
        
        return view('students/edit', $data);
    }

    public function update($id = null)
    {
        $model = new \App\Models\StudentModel();
        
        $data = [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/students');
    }
}

