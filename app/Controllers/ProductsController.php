<?php

class ProductsController
{
    public function index()
    {
       $productDB= new Product();

       $data['products']=$productDB->getAllProducts();

       View::load('product/index',$data);
    }
}