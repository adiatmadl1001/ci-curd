<?php

namespace App\Models;

use CodeIgniter\Model;

class M_employee extends Model
{
    protected $table = 'employees';

    public function getEmployees($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id'=>$id]);
        }
    }

    public function saveEmployees($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editEmployees($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }

    public function deleteEmployees($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id'=>$id]);
    }
}