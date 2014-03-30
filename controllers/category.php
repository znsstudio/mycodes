<?php

class Category extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index() 
    {    

        $begin = $this->model->parse_link();

        $this->view->title = 'Category';
        $this->view->categoryList = $this->model->categoryList($begin,5);
        $this->view->pages = $this->model->pages('category',$begin,5,"","/category/index");
        $this->view->render('header');
        $this->view->render('category/index');
        $this->view->render('footer');
    }
    
    public function create() 
    {
        $data = array();
        $data['category_name'] = $_POST['category_name'];

        // @TODO: Do your error checking!
        
        $this->model->create($data);
        header('location: ' . URL . 'category');
    }
    
    public function edit($id) 
    {
        $this->view->title = 'Edit category';
        $this->view->category = $this->model->categoryGet($id);   
        $this->view->render('header');
        $this->view->render('category/edit');
        $this->view->render('footer');
    }
    
    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['category_name'] = $_POST['category_name'];
    
        // @TODO: Do your error checking!
        
        $this->model->editSave($data);
        header('location: ' . URL . 'category');
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'category');
    }
}