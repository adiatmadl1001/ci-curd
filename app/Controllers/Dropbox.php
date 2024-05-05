<?php

namespace App\Controllers;
use App\Models\M_dropbox;

class Dropbox extends BaseController
{
    public function index(){
        $model = new M_dropbox;
        $data['dropbox'] = $model->getDropBox();
        return view('dropbox_view', $data);
    }
    public function indexv2(){
        $model = new M_dropbox;
        $data['dropbox'] = $model->getDropBox();
        return view('dropdown_testing', $data);
    }
}
