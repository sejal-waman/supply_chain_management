<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MyController extends BaseController
{


   //register

    public function registration()
    {
        return view('registration');
    }

   //login

    public function login()
    {
        return view('login');
    }

    //login1

    public function login1()
    {
        return view('login1');
    }

  //supplier

    public function supplier()
    {
        return view('supplier');
    }

    //fruits

    public function fruitsform()
    {
        return view('fruitsform');
    }


    //vegetables

    public function vegetablesform()
    {
        return view('vegetablesform');
    }

 
    //foodgrains

    public function foodgrainsform()
    {
        return view('foodgrainsform');
    }


    //spentgrains

    public function spentgrainsform()
    {
        return view('spentgrainsform');
    }

 
     
    //flowers

    public function flowersform()
    {
        return view('flowersform');
    }


    //company

    public function company()
    {
        return view('company');
    }


    //companyform

    public function companyform()
    {
        return view('companyform');
    }
//dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    public function registrationcompany()
    {
        return view('registrationcompany');
    }

    public function logincompany()
    {
        return view('logincompany');
    }




   

   

    

}
?>