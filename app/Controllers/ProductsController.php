<?php

class ProductsController
{
    public function index()
    {
       $productDB= new Product();

       $data['products']=$productDB->getAllProducts();

       View::load('product/index',$data);
    }
   
   // add
   
    public function add()
    {
       
       View::load('product/add');
    }
    
   //  get
    public function store()
    {
       if (isset($_POST['submit'])) {
        $name= $_POST['name'];
        $price= $_POST['price'];
        $desc= $_POST['desc'];
        $qety= $_POST['qety'];

        $data  = array('name' => $name,'price' => $price,'desc' => $desc,'qety' => $qety );


        $db = new Product();

        if ($db->insertProducts($data)) {
            View::load('product/add',["success"=>"Data Created Successfully"]);
        }
       }
       else {
        View::load('product/add');
       }


    }


    
   // edit
   
   public function edit($id)
   {
         $db = new Product();
         if( $db->getRow($id)){

            $data['row']=$db->getRow($id);

            return   View::load('product/edit',$data);
         }else {
            echo "ERORR";
         }
    
      
      
   }
   

   public function update($id)
   {
      if (isset($_POST['submit'])) {
         $name= $_POST['name'];
         $price= $_POST['price'];
         $desc= $_POST['desc'];
         $qety= $_POST['qety'];
 
         $dataInsert  = array('name' => $name,'price' => $price,'desc' => $desc,'qety' => $qety );
 
 
         $db = new Product();
 
         if ($db->updateProducts($id,$dataInsert)) {
         
             View::load('product/edit',["success"=>"Data Updated Successfully",'row'=> $db->getRow($id)]);
         }
        }
        else {
         View::load('product/add',['row'=> $db->getRow($id)]);
        }
 
   }



   public function delete($id)
   {
      $db = new Product();

      if ($db->deleteProducts($id)) {
         
         View::load('product/delete');
      }else {
         echo "ERROR";
      }
      
      
   }
   
}