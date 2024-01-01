<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <?php if (!isset($_SESSION['auth'])):?>
                <li class="nav-item">
                     <a class="nav-link" href="login.php">Login</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <?php endif; ?>
            </ul>
            <?php if (isset($_SESSION['auth'])): ?>
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
            </li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>