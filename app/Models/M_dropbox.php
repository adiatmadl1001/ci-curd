<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dropbox extends Model
{
    protected $table = 'dropbox_table';

    public function getDropBox($id=false){
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id'=>$id]);
        }
    }
    
}