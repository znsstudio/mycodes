<h1>Product: Edit</h1>


<form method="post" action="<?php echo URL;?>product/editSave/<?php echo $this->product[0]['id']; ?>">
    <label>Category ID</label><input type="text" name="category_id" value="<?php echo $this->product[0]['category_id']; ?>" /><br />
    <label>Product Name</label><input type="text" name="product_name" value="<?php echo $this->product[0]['product_name']; ?>" /><br />
    <label>Product Cost</label><input type="text" name="product_cost" value="<?php echo $this->product[0]['product_cost']; ?>" /><br />
    <label>&nbsp;</label><input type="submit" />
</form>