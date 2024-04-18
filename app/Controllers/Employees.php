<?php 

namespace App\Controllers;
use App\Models\M_employee;

class Employees extends BaseController
{
    public function index()
    {
        $model = new M_employee;
        if($this->request->getGet('q')){
            $q=$this->request->getGet('q');
            $data['getEmployees'] = $model->searchEmployees($q);
            // like('name',$q)->getAll();
        // }elseif($this->request->getGet('c')){
        //     $c = $this->request->getGet('c');
        //     $data['getEmployees'] = $model->searchEmployees($c);
        }else{
            $data['getEmployees'] = $model->getEmployees();
        }
        
        return view('employee_view', $data);
    }

    public function form()
    {
        return view('form_employee_view');
    }

    public function add()
    {
        $model = new M_employee;
        $data = array(
            'name'      =>$this->request->getPost('name'),
            'email'     =>$this->request->getPost('email'),
            'role'      =>$this->request->getPost('role'),
            'address'   =>$this->request->getPost('address')
        );
        $model->saveEmployees($data);
        session()->setFlashdata('success', 'Employee added successfully.');
        return redirect()->to(base_url('/'));
    }

    public function edit($id)
    {
        $model = new M_employee;
        $data['employees'] = $model->find($id);

        return view('edit_form', $data);
    }

    public function update()
    {
        $model = new M_employee;
        $id = $this->request->getPost('id');
        $data = array(
            'name'      =>$this->request->getPost('name'),
            'email'     =>$this->request->getPost('email'),
            'role'      =>$this->request->getPost('role'),
            'address'   =>$this->request->getPost('address')
        );
        $model->editEmployees($data, $id);
        session()->setFlashdata('update', 'Employee update succesfully.');
        return redirect()->to(base_url('/'));
    }

    public function delete($id)
    {
        $model = new M_employee;
        $result = $model->where('id', $id)->delete();
        
        session()->setFlashdata('delete', 'Employee deleted from table.');
        
        return redirect()->to(base_url('/'));

    }

}