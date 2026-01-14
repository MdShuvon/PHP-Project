<div class="container">
<h1>Answers: </h1>
<?php 
    $query = "SELECT * FROM `answers` WHERE question_id = $qid";
    $result = $conn -> query($query);
    foreach ($result as $row){
        echo "<div class='card margin-bottom-15'>
        <div class='card-body'>
        ".$row['answer']."
        </div>
        </div>";
    }
?>
</div>