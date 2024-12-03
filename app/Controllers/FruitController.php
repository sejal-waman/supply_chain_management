<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FruitModel;
use App\Models\GrainModel;
use App\Models\SpentModel;
use App\Models\VegetableModel;
use App\Models\FlowerModel;
use App\Models\FlowercompanybuyModel;
use App\Models\VegetablecompanybuyModel;
use App\Models\SpentcompanybuyModel;
use App\Models\GraincompanybuyModel;
use App\Models\FruitcompanybuyModel;

class FruitController extends BaseController
{
    private $detail=" ";
    //call fruitform
    public function fruitsform()
    {
        return view('fruitsform');
    }
    //call insertfruit

    public function addfruitinsert()
    {
        $data=[
            'fruit_supplier_name'=>$this->request->getVar('fruit_supplier_name'),
            'Address'=>$this->request->getVar('Address'),
            'contact_number'=>$this->request->getVar('contact_number'),
            'Email'=>$this->request->getVar('Email'),
            'fruit_name'=>$this->request->getVar('fruit_name'),
            'quantity'=>$this->request->getVar('quantity'),
            'Price'=>$this->request->getVar('Price')
             ];

          // dd($data);

             $model=new FruitModel();
             $model->insert($data);

             echo '<script>alert("fruit data insert successfully s ")</script>';  
             return $this->response->redirect(site_url('viewfruit'));
             
                 
    }
    //view fruit
    public function viewfruit()
    {
        $model=new FruitModel();
        $data['detail']=$model->findAll();
        return view('viewfruit',$data);
        return view('viewfruit');
    }

    public function viewcompanyfruit()
    {
        $model=new FruitModel();
        $data['detail']=$model->findAll();
        return view('viewcompanyfruit',$data);
        return view('viewcompanyfruit');
    }


    //delete fruit

    public function deletefruit($id)
    {
      $model= new  FruitModel();
      if($model->find($id))
      {
         $model->delete($id);
      } 
      return $this->response->redirect(site_url('viewfruit'));
    }

    //edit update fruit
    public function editfruit($id)
    {
            $model= new  FruitModel();
            $model = $model->find($id);
      
            $data['detail'] = $model;
            return view('editfruit',$data);
    }    
    
    public function updatefruit()
    {
        
        $id = $this->request->getVar('id');
       
       $data = [
        'fruit_supplier_name'=>$this->request->getVar('fruit_supplier_name'),
        'Address'=>$this->request->getVar('Address'),
        'contact_number'=>$this->request->getVar('contact_number'),
        'Email'=>$this->request->getVar('Email'),
        'fruit_name'=>$this->request->getVar('fruit_name'),
        'quantity'=>$this->request->getVar('quantity'),
        'Price'=>$this->request->getVar('Price')
       ];

     //  dd($pass_id);
     $model= new FruitModel(); 
     $model->update($id,$data);  
     
      // $this->detail->update($pass_id, $data);        
       return $this->response->redirect(site_url('viewfruit'));
   }

   public function viewcompanybuyfruit()
   {
    return view('viewcompanybuyfruit');
   }
   public function buyfruitinsert()
   {
     $data=[
       'company_name'=>$this->request->getVar('company_name'),
       'mobile_no'=>$this->request->getVar('mobile_no'),
       'email'=>$this->request->getVar('email'),
       'fruit_name'=>$this->request->getVar('fruit_name'),
       'quantity'=>$this->request->getVar('quantity')
        ];
       
      //dd($data);
 
        $model=new FruitcompanybuyModel();
        $model->insert($data);
        echo '<script>alert("order successfully")</script>';  
        return $this->response->redirect(site_url('company'));
      
    
   }

   public function displaybuyfruit()
   {
      $model=new FruitcompanybuyModel();
      $data['detail']=$model->findAll();
      return view('displaybuyfruit',$data);
      return view('displaybuyfruit');
   }

    
    //call grain
    public function foodgrain()
    {
        return view('foodgrainsform');
    }
     //call insertgrain
    public function addgraininsert()
    {
        $data=[
            'grain_supplier_name'=>$this->request->getVar('grain_supplier_name'),
            'Address'=>$this->request->getVar('Address'),
            'contact_number'=>$this->request->getVar('contact_number'),
            'Email'=>$this->request->getVar('Email'),
            'grain_name'=>$this->request->getVar('grain_name'),
            'quantity'=>$this->request->getVar('quantity'),
            'Price'=>$this->request->getVar('Price')
             ];

           //dd($data);

             $model=new GrainModel();
             $model->insert($data);

             echo '<script>alert("grain data insert successfully")</script>';   
             return $this->response->redirect(site_url('viewgrain'));
    }
    //view grain
    public function viewgrain()
    {
        $model=new GrainModel();
        $data['detail']=$model->findAll();
        return view('viewgrain',$data);
        return view('viewgrain');
    }

    public function viewcompanygrain()
    {
        $model=new GrainModel();
        $data['detail']=$model->findAll();
        return view('viewcompanygrain',$data);
        return view('viewcompanygrain');
    }

    



    //delete grain
    public function deletegrain($id)
    {
      $model= new  GrainModel();
      if($model->find($id))
      {
         $model->delete($id);
      }
      return $this->response->redirect(site_url('viewgrain'));
    }

     //edit update grain
     public function editgrain($id)
     {
             $model= new  GrainModel();
             $model = $model->find($id);
       
             $data['detail'] = $model;
             return view('editgrain',$data);
     }   
     
      
    public function updategrain()
    {
        
        $id = $this->request->getVar('id');
       
       $data = [
        'grain_supplier_name'=>$this->request->getVar('grain_supplier_name'),
        'Address'=>$this->request->getVar('Address'),
        'contact_number'=>$this->request->getVar('contact_number'),
        'Email'=>$this->request->getVar('Email'),
        'grain_name'=>$this->request->getVar('grain_name'),
        'quantity'=>$this->request->getVar('quantity'),
        'Price'=>$this->request->getVar('Price')
       ];

     //  dd($pass_id);
     $model= new GrainModel(); 
     $model->update($id,$data);
     
      // $this->detail->update($pass_id, $data);        
       return $this->response->redirect(site_url('viewgrain'));
   }

   public function viewcompanybuygrain()
   {
       return view('viewcompanybuygrain');
   }

   public function buygraininsert()
   {
    $data=[
      'company_name'=>$this->request->getVar('company_name'),
      'mobile_no'=>$this->request->getVar('mobile_no'),
      'email'=>$this->request->getVar('email'),
      'grain_name'=>$this->request->getVar('grain_name'),
      'quantity'=>$this->request->getVar('quantity')
       ];
      
     //dd($data);

       $model=new GraincompanybuyModel();
       $model->insert($data);

       echo '<script>alert("order successfully")</script>';  
       return $this->response->redirect(site_url('company'));
   }

   public function displaybuygrain()
   {
      $model=new GraincompanybuyModel();
      $data['detail']=$model->findAll();
      return view('displaybuygrain',$data);
      return view('displaybuygrain');
   }


     // call spentgrain
     public function spentgrain()
     {
         return view('spentgrainform');
     }
     //call addspentgraininsert
     public function addspentgraininsert()
     {
        $data=[
            'spent_grain_supplier_name'=>$this->request->getVar('spent_grain_supplier_name'),
            'Address'=>$this->request->getVar('Address'),
            'contact_number'=>$this->request->getVar('contact_number'),
            'Email'=>$this->request->getVar('Email'),
            'spent_grain_name'=>$this->request->getVar('spent_grain_name'),
            'quantity'=>$this->request->getVar('quantity'),
            'Price'=>$this->request->getVar('Price')
             ];

           //dd($data);

             $model=new SpentModel();
             $model->insert($data);

             echo '<script>alert("spent grain data insert successfully")</script>';  
             return $this->response->redirect(site_url('viewspent'));
     
     }
    //view spentgrain
     public function viewspent()
     {
        $model=new SpentModel();
        $data['detail']=$model->findAll();
        return view('viewspent',$data);
        return view('viewspent');
     }

     public function viewcompanyspentgrain()
     {
         $model=new SpentModel();
         $data['detail']=$model->findAll();
         return view('viewcompanyspentgrain',$data);
         return view('viewcompanyspentgrain');
     }
 

    //delete spentgrain
    public function deletespentgrain($id)
    {
      $model= new  SpentModel();
      if($model->find($id))
      {
         $model->delete($id);
      }
      return $this->response->redirect(site_url('viewspent'));
    }

    public function editspent($id)
     {
             $model= new  SpentModel();
             $model = $model->find($id);
       
             $data['detail'] = $model;
             return view('editspent',$data);
     }   
     
      
    public function updatespent()
    {
        
        $id = $this->request->getVar('id');
       
       $data = [
        'spent_grain_supplier_name'=>$this->request->getVar('spent_grain_supplier_name'),
        'Address'=>$this->request->getVar('Address'),
        'contact_number'=>$this->request->getVar('contact_number'),
        'Email'=>$this->request->getVar('Email'),
        'spent_grain_name'=>$this->request->getVar('spent_grain_name'),
        'quantity'=>$this->request->getVar('quantity'),
        'Price'=>$this->request->getVar('Price')
       ];

     //  dd($pass_id);
     $model= new SpentModel(); 
     $model->update($id,$data);
     
      // $this->detail->update($pass_id, $data);        
       return $this->response->redirect(site_url('viewspent'));
   }
   
   public function viewcompanybuyspent()
   {
      return view('viewcompanybuyspent');
   }

   public function buyspentinsert()
   {
    $data=[
      'company_name'=>$this->request->getVar('company_name'),
      'mobile_no'=>$this->request->getVar('mobile_no'),
      'email'=>$this->request->getVar('email'),
      'spent_name'=>$this->request->getVar('spent_name'),
      'quantity'=>$this->request->getVar('quantity')
       ];
      
     //dd($data);

       $model=new SpentcompanybuyModel();
       $model->insert($data);

       echo '<script>alert("order successfully")</script>'; 
       return $this->response->redirect(site_url('company')); 
   }

   public function displaybuyspent()
   {
      $model=new SpentcompanybuyModel();
      $data['detail']=$model->findAll();
      return view('displaybuyspent',$data);
      return view('displaybuyspent');
   }

   




     //view vegetable
     public function vegetable()
     {
         return view('vegetablesform');
     }
     //call vegetableinsert
     public function vegetableinsert()
     {
        $data=[
            'vegetable_supplier_name'=>$this->request->getVar('vegetable_supplier_name'),
            'Address'=>$this->request->getVar('Address'),
            'contact_number'=>$this->request->getVar('contact_number'),
            'Email'=>$this->request->getVar('Email'),
            'vegetable_name'=>$this->request->getVar('vegetable_name'),
            'quantity'=>$this->request->getVar('quantity'),
            'Price'=>$this->request->getVar('Price')
             ];

           //dd($data);

             $model=new VegetableModel();
             $model->insert($data);

             echo '<script>alert("vegetable data insert successfully")</script>';  
             return $this->response->redirect(site_url('viewvegetable'));
             
     
     }
    //view vegetable
     public function viewvegetable()
     {
        $model=new VegetableModel();
        $data['detail']=$model->findAll();
        return view('viewvegetable',$data);
        return view('viewvegetable');
     }

     public function viewcompanyvegetable()
     {
        $model=new VegetableModel();
        $data['detail']=$model->findAll();
        return view('viewcompanyvegetable',$data);
        return view('viewcompanyvegetable');
     }

     //delete vegetable
     public function deletevegetable($id)
     {
      $model= new  VegetableModel();
      if($model->find($id))
      {
         $model->delete($id);
      }
      return $this->response->redirect(site_url('viewvegetable'));
     }

     public function editvegetable($id)
     {
             $model= new  VegetableModel();
             $model = $model->find($id);
       
             $data['detail'] = $model;
             return view('editvegetable',$data);
     }   

     public function updatevegetable()
    {
        
        $id = $this->request->getVar('id');
       
       $data = [
        'vegetable_supplier_name'=>$this->request->getVar('vegetable_supplier_name'),
        'Address'=>$this->request->getVar('Address'),
        'contact_number'=>$this->request->getVar('contact_number'),
        'Email'=>$this->request->getVar('Email'),
        'vegetable_name'=>$this->request->getVar('vegetable_name'),
        'quantity'=>$this->request->getVar('quantity'),
        'Price'=>$this->request->getVar('Price')
       ];

     //  dd($pass_id);
     $model= new VegetableModel(); 
     $model->update($id,$data);
     
      // $this->detail->update($pass_id, $data);        
       return $this->response->redirect(site_url('viewvegetable'));
   }

   public function buyvegetableinsert()
   {
    $data=[
      'company_name'=>$this->request->getVar('company_name'),
      'mobile_no'=>$this->request->getVar('mobile_no'),
      'email'=>$this->request->getVar('email'),
      'vegetable_name'=>$this->request->getVar('vegetable_name'),
      'quantity'=>$this->request->getVar('quantity')
       ];
      
     //dd($data);

       $model=new VegetablecompanybuyModel();
       $model->insert($data);

       echo '<script>alert("order successfully")</script>';  
       return $this->response->redirect(site_url('company'));
   }

   public function displaybuyvegetable()
   {
      $model=new VegetablecompanybuyModel();
      $data['detail']=$model->findAll();
      return view('displaybuyvegetable',$data);
      return view('displaybuyvegetable');
   }

   public function viewcompanybuyvegetable()
   {
      return view('viewcompanybuyvegetable');
   }

    
     // call flower
     public function flower()
     {
         return view('flowersform');
     }
     //call flowersinsert
     public function addflowerinsert()
     {
        $data=[
            'flower_supplier_name'=>$this->request->getVar('flower_supplier_name'),
            'Address'=>$this->request->getVar('Address'),
            'contact_number'=>$this->request->getVar('contact_number'),
            'Email'=>$this->request->getVar('Email'),
            'flower_name'=>$this->request->getVar('flower_name'),
            'quantity'=>$this->request->getVar('quantity'),
            'Price'=>$this->request->getVar('Price')
             ];

           //dd($data);

             $model=new FlowerModel();
             $model->insert($data);

             echo '<script>alert("flower data insert successfully")</script>';  
             return $this->response->redirect(site_url('viewflower'));
     
     }
    //view flowers
     public function viewflower()
     {
        $model=new FlowerModel();
        $data['detail']=$model->findAll();
        return view('viewflower',$data);
        return view('viewflower');
     }

     public function viewcompanyflower()
     {
        $model=new FlowerModel();
        $data['detail']=$model->findAll();
        return view('viewcompanyflower',$data);
        return view('viewcompanyflower');
     }

     //delete flower
     public function deleteflower($id)
     {
      $model= new  FlowerModel();
      if($model->find($id))
      {
         $model->delete($id);
      }
      return $this->response->redirect(site_url('viewflower'));
     }

     public function editflower($id)
     {
             $model= new  FlowerModel();
             $model = $model->find($id);
       
             $data['detail'] = $model;
             return view('editflower',$data);
     }   
     
      
    public function updateflower()
    {
        
        $id = $this->request->getVar('id');
       
       $data = [
        'flower_supplier_name'=>$this->request->getVar('flower_supplier_name'),
        'Address'=>$this->request->getVar('Address'),
        'contact_number'=>$this->request->getVar('contact_number'),
        'Email'=>$this->request->getVar('Email'),
        'flower_name'=>$this->request->getVar('flower_name'),
        'quantity'=>$this->request->getVar('quantity'),
        'Price'=>$this->request->getVar('Price')
       ];
     //dd($data);
     //  dd($pass_id);
     $model= new FlowerModel(); 
     $model->update($id,$data);
     
      // $this->detail->update($pass_id, $data);        
       return $this->response->redirect(site_url('viewflower'));
   }

   public function viewcompanybuyflower()
   {
      return view('viewcompanybuyflower');
   }

   public function buyflowerinsert()
   {
    $data=[
      'company_name'=>$this->request->getVar('company_name'),
      'mobile_no'=>$this->request->getVar('mobile_no'),
      'email'=>$this->request->getVar('email'),
      'flower_name'=>$this->request->getVar('flower_name'),
      'quantity'=>$this->request->getVar('quantity')
       ];
      
     //dd($data);

       $model=new FlowercompanybuyModel();
       $model->insert($data);

       echo '<script>alert("order successfully")</script>'; 
       return $this->response->redirect(site_url('company')); 

       } 

       public function displaybuyflower()
       {
          $model=new FlowercompanybuyModel();
          $data['detail']=$model->findAll();
          return view('displaybuyflower',$data);
          return view('displaybuyflower');
       }
  
   }

    
      
     

 
