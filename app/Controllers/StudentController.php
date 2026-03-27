<?php
namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
public function index()
    {
        $model = new \App\Models\StudentModel();
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            // Add pagination to the search results
            $data['students'] = $model->like('name', $keyword)
                                      ->orLike('email', $keyword)
                                      ->orLike('course', $keyword)
                                      ->paginate(5); // Show 5 records per page
        } else {
            // Add pagination to the default list
            $data['students'] = $model->paginate(5); 
        }
        
        // Pass the pager object to the view
        $data['pager'] = $model->pager;

        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

public function store()
    {
        $model = new \App\Models\StudentModel();
        
        $data = [
            // Use getPost('fieldname') instead of $_POST['fieldname']
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
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

