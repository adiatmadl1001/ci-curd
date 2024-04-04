<?php 

namespace App\Controllers;
use App\Models\M_employee;

class Employees extends BaseController
{
    public function index()
    {
        $model = new M_employee;
        $data['getEmployees'] = $model->getEmployees();
        
        // $this->load->model('M_employee');
        // $data['employee'] = $this->M_employee->getEmployees();
        // $this->load->view('employee_view',$data);
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
        return view('form_employee_view');
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
        return redirect()->to(base_url('/'));
    }

    public function delete($id)
    {
        $model = new M_employee;
        $model->where('id', $id)->delete();
        
        session()->setFlashdata('succesdel', 'Employee deleted from table.');
        
        return redirect()->to(base_url('/'));

    }

}