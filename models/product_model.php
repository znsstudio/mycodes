<?php




class Product_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productList($begin,$pagelimit)
    {
        return $this->db->select("SELECT id,category_id,product_name,product_cost FROM product limit $begin,$pagelimit");
    }


    public function parse_link($i=2){

        return $this->db->parse_link($i);

    }


    public function pages($table_name, $begin="0", $pagelimit="5", $add_query = "", $add_link = ""){

        return $this->db->pages($table_name, $begin, $pagelimit, $add_query, $add_link);
    }

    
    public function productGet($product_id)
    {
        return $this->db->select('SELECT id,category_id,product_name,product_cost FROM product WHERE id = :id', array(':id' => $product_id));
    }
    
    public function create($data)
    {
        $this->db->insert('product', array(
            'category_id' => $data['category_id'],
            'product_name' => $data['product_name'],
            'product_cost' => $data['product_cost']
        ));
    }
    
    public function editSave($data)
    {   
        $this->db->update('product', $data, "`id` = {$data['id']}");
    }
    
    public function delete($product_id)
    {   
        $this->db->delete('product', "id = '$product_id'");
    }
}