<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function Demo()
    {
        return view('curd');
    }

    public function insert()
    {
         $data=[
            'sname'=>$this->request->getVar('sname'),
            'sclass'=>$this->request->getVar('sclass')];
 
            $model=new StudentModel();
            $model->insert($data);

            //dd($data);

            echo "data send successfully";
         
    }
}
?>