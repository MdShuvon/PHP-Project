<div class = "container">
    <div class = 'row'>
        <h1 class = "hading">Question Details</h1>
        <div class = "col-8 ">
            <?php 
            include ('./common/db.php');
            $query = "SELECT * FROM `questions` WHERE id = $qid";
            $result = $conn -> query($query);
            $row = $result -> fetch_assoc();
            $cid = $row['category_id'];
            
            echo "<h5 class = 'margin-bottom-15 question-title'>Question: ".$row['title']."</h5>";
            echo "<p class = 'margin-bottom-15'>".$row['descriptions']."</p>";
            include ('answers.php');
            ?>
            <form action="./server/requests.php" method="post"> 
                <input type="hidden" name="question_id" value="<?php echo $qid; ?>">
                <textarea name="answer" class = "form-control margin-bottom-15" placeholder="Your answer..."></textarea>
                <button class = "btn btn-primary">Submit your answer</button>
            </form>
        </div>
        <div class = "col-4">
            <?php 
                $catagory_query = "SELECT name FROM `category` WHERE id = $cid";
                $catagory_result = $conn -> query($catagory_query);
                $catagory_row = $catagory_result -> fetch_assoc();
                echo "<h1>". ucfirst($catagory_row['name'])."</h1>";
                

                $query = "SELECT * FROM `questions` where category_id = $cid and id != $qid";
                $result = $conn -> query($query);
                foreach ($result as $row){
                    $id = $row['id'];
                    $title = $row['title'];
                    echo "<div class = 'row question-list'>
                     <h5><a href='?q-id=$id'>$title</a></h5>
                    </div>";
                }
            ?>
        </div>
    </div>
</div>