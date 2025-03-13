<div class="container">
    <h1 class="heading">Signup</h1>
    <form action="../server/requests.php" method="post">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username"  required>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">User email</label>
            <input type="text" name="useremail" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">User password</label>
            <input type="password" name="userpassword" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="address" class="form-label">User address</label>
            <input type="text" name="useraddress" class="form-control" id="address" placeholder="Enter your address" required>
        </div>
        <div>
            <button type="submit" name="signup" class="btn btn-primary  offset-sm-3 ">Signup</button>
        </div>
    </form>
</div>