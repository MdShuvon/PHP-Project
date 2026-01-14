<div class = "container">
    <div class = "row">
        <div class = "col-8">
            <h1 class = "hading">Questions</h1>
        <?php 

            $cid = isset($_GET['c-id']) ? intval($_GET['c-id']) : 0;
            $uid = isset($_GET['u-id']) ? intval($_GET['u-id']) : 0;
            $search = isset($_GET['search']) ? $_GET['search'] : '';
        include ('./common/db.php'); 
        if ($cid){
            $query = "SELECT * FROM `questions` WHERE category_id = $cid";
        } else if ($uid){
            $query = "SELECT * FROM `questions` WHERE user_id = $uid";
        } else if (isset($_GET['latest'])){
            $query = "SELECT * FROM `questions` order by id desc";
        } else if ($search){
            $query = "SELECT * FROM `questions` where title like '%$search%'";
        } else {
            $query = "SELECT * FROM `questions`";
        }
        $result = $conn -> query($query);
        foreach ($result as $row){
            $title = $row['title'];
            $id = $row['id'];
            echo "<div class = 'row question-list'>
             <h5 class='my-question'><a href='?q-id=$id'>$title</a>";
             echo $uid?"<a href='./server/requests.php?delete=$id'>Delete</a>":NULL;
             echo "</h5></div>";
        }
        ?>
        </div>
        <div class = "col-4">
            <?php include ('catagory-list.php'); ?>
        </div>
    </div>
</div>