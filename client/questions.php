<div class="container">
    <h1 class="heading">Questions</h1>
    <div class="col-8">
        <?php

        include("../common/db.php");
        $sqlQuery = "select * from questions";
        $questions = $conn->query($sqlQuery);
        $questions->execute();
        foreach ($questions as $question) {
            $title = $question['title'];
            $id = $question['id'];
            echo "<div class='row question-list'><h4><a href='?q-id=$id'>$title</a></h4></div>";
        }
        ?>
    </div>
</div>