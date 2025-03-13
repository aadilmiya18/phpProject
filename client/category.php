<select name="category" id="category" class="form-control">
    <option value="">Select A Category</option>
    <?php
    include("../common/db.php");
    $sqlQuery = "select * from category";
    $result = $conn->prepare($sqlQuery);
    $result->execute();
    $data = $result->fetchAll();
    foreach ($data as $row) {
        $name = ucfirst($row['name']);
        $id = $row['id'];
        echo "<option value=$id>$name</option>";
    }
    ?>


</select>