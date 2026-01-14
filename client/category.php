<select class="form-control" name="category" id="category">
    <option value="">Select A Category</option>
    <?php 
     include ('./common/db.php');
        $query = "SELECT * FROM `category`";
        $result = $conn -> query ($query);
        
        foreach ($result as $row){
            echo $name = ucfirst($row['name']);
            echo $id = $row['id'];
            echo "<option value='$id'>$name</option>";
        }
    ?>
</select>