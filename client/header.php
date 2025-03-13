<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            <img src="../public/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="./">Home</a>
                <?php
                if (isset($_SESSION['user']['username'])) { ?>
                    <a class="nav-link" href="../server/requests.php?logout=true">Logout</a>
                    <a class="nav-link" href="?ask=true">Ask A Question</a>
                <?php } else {?>
                    <a class="nav-link" href="?login=true">Login</a>
                    <a class="nav-link" href="?signup=true">Signup</a>
                <?php } ?>
                <a class="nav-link" href="#">Category</a>
                <a class="nav-link" href="#">Latest Question</a>
            </div>
        </div>
    </div>
</nav>