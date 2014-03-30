<h1>Category</h1>

<form method="post" action="<?php echo URL;?>category/create">
    <label>Category name</label><input type="text" name="category_name" /><br />
    <label>&nbsp;</label><input type="submit" />
</form>

<hr />

<table width=600>
<?php
    foreach($this->categoryList as $key => $value) {
        echo '<tr>';
        echo '<td wdidth=100>' . $value['id'] . '</td>';
        echo '<td>' . $value['category_name'] . '</td>';
        echo '<td width=150>
                <a href="'.URL.'category/edit/'.$value['id'].'">Edit</a> 
                <a href="'.URL.'category/delete/'.$value['id'].'">Delete</a></td>';
        echo '</tr>';
    }
    echo $this->pages;
?>
</table>