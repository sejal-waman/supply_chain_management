<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierRegisterModel;
use App\Models\SupplierUserModel;
use App\Models\CompanyRegisterModel;
use App\Models\CompanyUserModel;

class LoginController extends BaseController
{
    public function supplierregisterinsert()
    {
        $data=[
            'supplier_name'=>$this->request->getVar('supplier_name'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'repeat_password'=>$this->request->getVar('repeat_password')
    
             ];

           //dd($data);

             $model=new SupplierRegisterModel();
             $model->insert($data);

             echo '<script>alert("grain data insert successfully")</script>';   
             return $this->response->redirect(site_url('login'));
    }
    
    public function index()
    {
        Helper['form'];
        return view('login');
    }

    public function checksupplierlogin()
    {
          $SupplierUserModel=new  SupplierUserModel();
          $Email = $this->request->getVar('email');
          $password = $this->request->getVar('password'); 
          $user = $SupplierUserModel->getUser($Email, $password);
  
          If($user){
              $session = session();
              $session->set('user_id', $user['id']);
              $session->set('email', $user['email']);
              return redirect()->to('supplier');
          }else{
              return redirect()->to('login');
          }
    }

    public function companyregisterinsert()
    {
        $data=[
            'company_name'=>$this->request->getVar('company_name'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'repeat_password'=>$this->request->getVar('repeat_password')
    
             ];

           //dd($data);

             $model=new CompanyRegisterModel();
             $model->insert($data);

             echo '<script>alert("grain data insert successfully")</script>';   
             return $this->response->redirect(site_url('logincompany'));
    
    }
    public function checkcompanylogin()
    {
        $CompanyUserModel=new  CompanyUserModel();
        $Email = $this->request->getVar('email');
        $password = $this->request->getVar('password'); 
        $user = $CompanyUserModel->getUser($Email, $password);

        If($user){
            $session = session();
            $session->set('user_id', $user['id']);
            $session->set('email', $user['email']);
            return redirect()->to('company');
        }else{
            return redirect()->to('logincompany');
        }
    }
}
