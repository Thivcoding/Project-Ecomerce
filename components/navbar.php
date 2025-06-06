
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <?php if(isset($_SESSION['auth'])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['auth-user']['name']?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                        <li><a class="dropdown-item" href="signout.php">Sign Out</a></li>
                        <li><a class="dropdown-item" href="#">Other</a></li>
                    </ul>
                </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="login.php">Sign In</a>
                        </li>
                    </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</nav>
