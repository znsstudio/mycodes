<h1>Product</h1>

<form method="post" action="<?php echo URL;?>product/create">
    <label>Category ID</label><input type="text" name="category_id" /><br />
     <label>Name</label><input type="text" name="product_name" /><br />
      <label>Cost</label><input type="text" name="product_cost" /><br />
      <label>&nbsp;</label><input type="submit" />
</form>

<hr />

<table width=600>
<?php
    foreach($this->productList as $key => $value) {
        echo '<tr>';
        echo '<td width=100>' . $value['id'] . '</td>';
        echo '<td width=100>' . $value['category_id'] . '</td>';
        echo '<td>' . $value['product_name'] . '</td>';
        echo '<td width=100>' . $value['product_cost'] . '</td>';
        echo '<td width=100>
                <a href="'.URL.'product/edit/'.$value['id'].'">Edit</a> 
                <a href="'.URL.'product/delete/'.$value['id'].'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>

<?php echo $this->pages; ?>