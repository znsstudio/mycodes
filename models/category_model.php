<?php

class Category_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function categoryList($begin,$pagelimit)
    {
        return $this->db->select("SELECT id,category_name FROM category limit $begin,$pagelimit");
    }

    public function pages($table_name, $begin="0", $pagelimit="5", $add_query = "", $add_link = ""){

        return $this->db->pages($table_name, $begin, $pagelimit, $add_query, $add_link);
    }

    public function parse_link($i=2){

        return $this->db->parse_link($i);

    }

    
    public function categoryGet($category_id)
    {

        echo $this->_url[3];

        return $this->db->select('SELECT id,category_name FROM category WHERE id = :id', array(':id' => $category_id));
    }
    
    public function create($data)
    {
        $this->db->insert('category', array(
            'category_name' => $data['category_name']
        ));
    }
    
    public function editSave($data)
    {
        
        $this->db->update('category', $data, "`id` = {$data['id']}");
    }
    
    public function delete($category_id)
    {   
        $this->db->delete('category', "id = '$category_id'");
    }
}