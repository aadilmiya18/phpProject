<div class="container">
    <h1 class="heading">Ask A Question</h1>
    <form action="../server/requests.php" method="post">

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <?php include('../client/category.php')?>
        </div>

        <div>
            <button type="submit" name="ask" class="btn btn-primary  offset-sm-3 ">Ask Question</button>
        </div>
    </form>
</div>