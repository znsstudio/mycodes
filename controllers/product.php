<?php

class Product extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index() 
    {    

        $begin = $this->model->parse_link();
        $this->view->title = 'Users';
        $this->view->productList = $this->model->productList($begin,5);
        $this->view->pages = $this->model->pages('product',$begin,5,"","/product/index");
        $this->view->render('header');
        $this->view->render('product/index');
        $this->view->render('footer');
    }
    
    public function create() 
    {
        $data = array();
        $data['product_name'] = $_POST['product_name'];
        $data['product_cost'] = $_POST['product_cost'];
        $data['category_id'] = $_POST['category_id'];
        
        // @TODO: Do your error checking!
        $this->model->create($data);
        header('location: ' . URL . 'product');
    }
    
    public function edit($id) 
    {
        $this->view->title = 'Edit User';
        $this->view->product = $this->model->productGet($id);
        
        $this->view->render('header');
        $this->view->render('product/edit');
        $this->view->render('footer');
    }
    
    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['product_name'] = $_POST['product_name'];
        $data['product_cost'] = $_POST['product_cost'];
        $data['category_id'] = $_POST['category_id'];
        
        // @TODO: Do your error checking!
        
        $this->model->editSave($data);
        header('location: ' . URL . 'product');
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'product');
    }
}