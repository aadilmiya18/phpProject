<div class="container">
    <h1 class="heading">Login</h1>
    <form action="../server/requests.php" method="post">

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">User email</label>
            <input type="text" name="useremail" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">User password</label>
            <input type="password" name="userpassword" class="form-control" id="password" placeholder="Enter your password">
        </div>

        <div>
            <button type="submit" name="login" class="btn btn-primary  offset-sm-3 ">Login</button>
        </div>
    </form>
</div>