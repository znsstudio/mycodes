<h1>category: Edit</h1>


<form method="post" action="<?php echo URL;?>category/editSave/<?php echo $this->category[0]['id']; ?>">
    <label>category Name</label><input type="text" name="category_name" value="<?php echo $this->category[0]['category_name']; ?>" /><br />

    <label>&nbsp;</label><input type="submit" />
</form>